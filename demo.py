#pip install pymysql

import pymysql

conn= pymysql.connect("localhost", "root", "", "company")

a = conn.cursor()

sql = ('select * from login')
a.execute(sql)

countrow = a.execute(sql)
print("Number of rows: ",countrow)
data = a.fetchone()
print(data)