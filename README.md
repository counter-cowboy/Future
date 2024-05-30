### DB connection requisites<br>
http://www.phpmyadmin.co<br>
Server: sql8.freemysqlhosting.net<br>
DB name: sql8710509<br>
Username: sql8710509<br>
Password: q5DW2YwPSX<br>
Port number: 3306<br>

#### API methods:<br>
GET {host:port}/api/v1/notebook<br>
POST {host:port}/api/v1/notebook/<br>
GET  {host:port}/api/v1/notebook/<id>/<br>
POST {host:port}/api/v1/notebook/<id>/edit<br>
DELETE {host:port}/api/v1/notebook/<id>/<br>

##### DB_columns
'fio'=> 'required|string'<br>
'company'=>  'string|nullable'<br>
'phone_number'=> 'string|required'<br>
'email' => 'email|required'<br>
'birth_date'=>'nullable|string'<br>
'photo'=>'nullable|string'<br>