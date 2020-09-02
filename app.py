from flask import Flask,  request, render_template
from makedocx import outdocx

app = Flask(__name__)


@app.route('/')
def hello():
    return '111111111111111'


@app.route('/index2')
def index2():

    return render_template('')


@app.route('/login2', methods=['POST'])
def login2():
    system = request.form['system']
    name = request.form['name']
    shouji = request.form['shouji']
    outdocx(name, shouji, system)
    print("生成完成，请去目录下寻找文件")
    return '测试人员是：%s， 系统名称是： %s， 测试人员手机号是：%s' % (name, system, shouji)


@app.route('/login')
def login():
    return render_template('a.html')
