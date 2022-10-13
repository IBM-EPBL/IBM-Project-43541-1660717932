Python 3.9.7 (tags/v3.9.7:1016ef3, Aug 30 2021, 20:19:38) [MSC v.1929 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> a=10
>>> print (id(a))
2134276663888
>>> b=73.3
>>> print(type(b))
<class 'float'>
>>> #multiple variable
>>> a,b,c=30,10,20
>>> print(a)
30
>>> print(b)
10
>>> print(c)
20
>>> # delete values
>>> del a
>>> prin(a)
Traceback (most recent call last):
  File "<pyshell#11>", line 1, in <module>
    prin(a)
NameError: name 'prin' is not defined
>>> 