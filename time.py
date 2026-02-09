import serial
import MySQLdb
import time
from datetime import datetime
obj=serial.Serial('COM4',9600)

if obj.isOpen()==False:
   obj.open()
   time.sleep(2)


while True:
    time.sleep(1)
    con=MySQLdb.connect("localhost","root","","auto");
    
    cursor=con.cursor()
    con=MySQLdb.connect("localhost","root","","auto");
    
    cursor.execute("select * from name");
    row=cursor.fetchall();
    print row
    a=row[0][1]
    b=row[0][2]
    c=row[0][3]
    d=row[0][4]
    print a
    print b
    print c
    print d
    obj.write(a)
    time.sleep(1)
    #print "hello"
    obj.write(b)
    time.sleep(1)
    obj.write(c)
    obj.write(d)


    
##cursor.execute("select * from name1")
##while True:
##    l=[]
##    for row1 in cursor.fetchone():
##        l.append(row1)
##    print l
##    x=datetime.now().strftime("%H:%M")
##    n=datetime.today().weekday()
##    if l[1]=="mon":
##        day=0
##    elif l[1]=="tue":
##        day=1
##    elif l[1]=="wed":
##        day=2
##    elif l[1]=="thurs":
##        day=3
##    elif l[1]=="fri":
##        day=4
##    elif l[1]=="sat":
##        day=5
##    else:
##        day=6
##    if day==n:
##        if x>=l[2] and x<l[4]:
##            obj.write(l[3])
obj.close()
    
