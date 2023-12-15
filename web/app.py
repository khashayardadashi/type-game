from flask import Flask , url_for , render_template , request , redirect
from flask_sqlalchemy import SQLAlchemy
app=Flask(__name__)
app.config["SQLALCHEMY_DATABASE_URI"] = 'sqlite:///data.db'
db=SQLAlchemy(app)
class User(db.Model):
    id=db.Column(db.Integer , primary_key=True)
    username=db.Column(db.String(50))
    password=db.Column(db.String(20))

    def __repr__(self):
        return f"User({self.username} , {self.password})"



@app.route('/' , methods=['GET' , "POST"])
def index():
    if request.method == 'POST':
        username=request.form['username']
        password=request.form['password']
        print(username, password)
        user=User.query.filter_by(username=username, password=password).first()
        print(user)
        if(user is not None):
            person=[user.username , user.password]
            return render_template("home/index.html" , person=person)
        elif( user is None):
            return redirect(url_for('login'))
    elif request.method == 'GET':
        return redirect(url_for('login'))



@app.route('/login' , methods= ["GET" , "POST"])
def login():
    if request.method == 'GET':
       return render_template("home/login.html")
    elif request.method == 'POST':
        username=request.form['username']
        password=request.form['password']
        p1=User(username=username, password=password)
        db.session.add(p1)
        db.session.commit()
        return render_template("home/login.html")

@app.route('/register' , methods= ["GET" , "POST"])
def register():
    return render_template("home/register.html")

if __name__ == '__main__':
    app.run(debug=True)