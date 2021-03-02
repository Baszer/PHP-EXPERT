import time 
h=0
m=0
s=0
a = input("Kies het uur:"); a = int(a)
b = input("Kies de minuut:"); b = int(b) 
c = input("Kies de seconde:"); c = int(c) 
def count():
    timeformat = '{:02d}:{:02d}:{:02d}'.format(h, m , s)
    print(timeformat)
while True:
    for h in range(a,23):
      h=0
      for m in range(b,59):
           m=0
           for s in range(c,59):
            s=0
            time.sleep(1)
            count()
