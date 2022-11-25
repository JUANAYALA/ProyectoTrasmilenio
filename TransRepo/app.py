from flask import Flask
from flask import render_template, request, redirect, session
from flaskext.mysql import MySQL
from datetime import datetime
from flask import send_from_directory
import os


app=Flask(__name__)
app.secret_key="develoteca "
mysql=MySQL()

app.config['MYSQL_DATABASE_HOST'] = 'localhost'
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = ''
app.config['MYSQL_DATABASE_DB'] = 'trasmiapp'
mysql.init_app(app)

@app.route('/')
def inicio():
    return render_template('sitio/index.php')

@app.route('/img/<imagen>')
def imagenes(imagen):    
    print(imagen)
    return send_from_directory(os.path.join('templates/admin/img'),imagen)
    return send_from_directory(os.path.join('templates/usuarios/img'),imagen)



@app.route('/Formulario')
def form_prin():
    return render_template('admin/form_prin.php') 

@app.route('/FormularioU')
def form_prinus():
    return render_template('usuarios/formulaU.php') 
  


@app.route('/Login')
def login():

    return render_template('sitio/login.php')


@app.route('/sitio/login', methods=['POST'])
def login_post():
    _documentolo=request.form['textDoclo']
    _password=request.form['textpass']
    print(_documentolo)
    print(_password)
    if _documentolo=="1030696488":
        session["login"]=True
        session["documento"]="Administrador"
        return redirect("/AdministracionN")   

    if _documentolo!="1030696488":
        session["login"]=True
        session["documento"]="Usuario"
        return redirect("/NoticiasU")


@app.route('/Noticias')
def Noticias():
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("SELECT * FROM form_princ")
    noticia=cursor.fetchall()
    conexion.commit()
    #print (noticia)

    return render_template('admin/Noticias.php', noticia=noticia)


@app.route('/AdministracionN')
def Administrador_Not():
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("SELECT * FROM form_princ")
    noticia=cursor.fetchall()
    conexion.commit()
    #print (noticia)

    return render_template('admin/administracionN.php', noticia=noticia)

@app.route('/AdministracionU')
def Administrador_Usu():
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("SELECT * FROM form_registro")
    usuario=cursor.fetchall()
    conexion.commit()
    #print (noticia)

    return render_template('admin/administracionU.php', usuario=usuario)

 #*********************FORMULARIO USUARIOS****************      
@app.route('/NoticiasU')
def Noti_usuario():
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("SELECT * FROM form_princ")
    noticia=cursor.fetchall()
    conexion.commit()
    #print (noticia)

    return render_template('usuarios/NoticiaU.php', noticia=noticia)
    



@app.route('/Administracion')
def Administrador():
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("SELECT * FROM form_princ")
    noticia=cursor.fetchall()
    conexion.commit()
    #print (noticia)

    return render_template('admin/administracion.php', noticia=noticia)



    

@app.route('/Cerrarsesion')
def Logout():
    return render_template('sitio/index.php')

@app.route('/Registro')
def Registro():
    return render_template('sitio/Registro.php')

#*********************FORMULARIO ADM********************************

@app.route('/admin/Noticias/guardar', methods=['POST'])
def admin_noticias_guardar():
    _nombre=request.form['textNom']   
    _apellido=request.form['textApe']
    _documento=request.form['textDoc']            
    _telefono=request.form['textTel']   
    _descripcion=request.form['textDes']
    _nombreEs=request.form['textNomE']
    _direccion=request.form['textDir']
    _clasificacion=request.form['textCla']            
    _correoelec=request.form['textCor']   
    _notificacion=request.form['textNot']
    _fecha=request.form['textFe']
    _evidencia=request.files['textEvi']

    tiempo= datetime.now()
    horaActual=tiempo.strftime("%Y%H%M%S")

    if _evidencia.filename!="":
        nuevoNombre=horaActual+"_"+_evidencia.filename
        _evidencia.save("templates/admin/img/"+nuevoNombre)
  
      
    sqlfp = "Insert Into `form_princ` (`id_fp`, `nombre`, `apellido`, `documento`,`telefono`,`descripcion`, `nom_esta`, `dir_esta`, `cla_esta`,`correo`,`not_esta`, `fecha`,`imagen`) Values (Null,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s);"
    datos=(_nombre,_apellido,_documento,_telefono,_descripcion,_nombreEs,_direccion,_clasificacion,_correoelec,_notificacion,_fecha,nuevoNombre)
    conexion = mysql.connect()
    cursor = conexion.cursor()
    cursor.execute(sqlfp,datos)
    conexion.commit()

    return redirect('/Administracion')

#*********************FORMULARIOS USUARIOS ****************

@app.route('/usuarios/Noticias/guardar', methods=['POST'])
def usuarios_noticias_guardar():
    _nombre=request.form['textNom']   
    _apellido=request.form['textApe']
    _documento=request.form['textDoc']            
    _telefono=request.form['textTel']   
    _descripcion=request.form['textDes']
    _nombreEs=request.form['textNomE']
    _direccion=request.form['textDir']
    _clasificacion=request.form['textCla']            
    _correoelec=request.form['textCor']   
    _notificacion=request.form['textNot']
    _fecha=request.form['textFe']
    _evidencia=request.files['textEvi']

    tiempo= datetime.now()
    horaActual=tiempo.strftime("%Y%H%M%S")

    if _evidencia.filename!="":
        nuevoNombre=horaActual+"_"+_evidencia.filename
        _evidencia.save("templates/admin/img/"+nuevoNombre)
   
    sqlfp = "Insert Into `form_princ` (`id_fp`, `nombre`, `apellido`, `documento`,`telefono`,`descripcion`, `nom_esta`, `dir_esta`, `cla_esta`,`correo`,`not_esta`, `fecha`,`imagen`) Values (Null,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s);"
    datos=(_nombre,_apellido,_documento,_telefono,_descripcion,_nombreEs,_direccion,_clasificacion,_correoelec,_notificacion,_fecha,nuevoNombre)
    conexion = mysql.connect()
    cursor = conexion.cursor()
    cursor.execute(sqlfp,datos)
    conexion.commit()

    return redirect('/NoticiasU')

#**********************REGISTROS************************

@app.route('/sitio/Registro/guardar', methods=['POST'])
def sitio_Registro_guardar():
    _nombre=request.form['textNom']
    _apellido=request.form['textApe']
    _documento=request.form['textDoc']            
    _telefono=request.form['textTel']      
    _contraseña=request.form['textPs']
  
   
   
    sql = "Insert Into `form_registro` (`id_fr`, `nombre`, `apellido`, `documento`,`telefono`,`contraseña`) Values (Null,%s,%s,%s,%s,%s);"
    datos=(_nombre,_apellido,_documento,_telefono,_contraseña)
    conexion = mysql.connect()
    cursor = conexion.cursor()
    cursor.execute(sql,datos)
    conexion.commit()
    return redirect('/NoticiasU')


#*********************************ELIMINAR FOTOS Y REGISTROS********************************

@app.route('/admin/Noticias/borrar', methods=['POST'])
def admin_Noticias_borrar():

    _id=request.form['textId']
    print(_id)
    
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("SELECT imagen FROM form_princ where id_fp=%s",(_id))
    noti=cursor.fetchall()
    conexion.commit()

    if os.path.exists("templates/admin/img/"+str(noti[0][0])):
        os.unlink("templates/admin/img/"+str(noti[0][0]))
    

    conexion=mysql.connect()
    conexion=mysql.connect()
    cursor=conexion.cursor()
    cursor.execute("Delete from form_princ where id_fp=%s",(_id))
    conexion.commit()
   

    return redirect('/Administracion')   




if __name__ == '__main__':
    app.run(debug=True)