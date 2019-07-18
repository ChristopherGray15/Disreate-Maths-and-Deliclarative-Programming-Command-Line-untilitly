
### this is a nested loop
'''
for hours in range(24):
    for minutes in range (60):
        for seconds in range (60):
          print(hours,':',minutes, ':', seconds)

### its tuples time, great..!!!

print(type(("a",10.5)))

print(type((0)))

print(type((0,)))

print(type(()))

print(type(("hello")))

print(type((10.5)))


def square_of_x(par):
    if type(par)==int or type(par)==float:
        return par**2
    else:
        print("sorry dave I cannot do that")
        return 0.0

print(square_of_x("are you there dave"))
print(square_of_x(479))
print(square_of_x(773))
print(square_of_x("hello dave I can do that"))
'''
'''
print(type([]))
print(type([2,4]))
print(type(['hello', 10,5]))
'''



'''
i=[2,3]
i.append(5)
print(i)
i.insert(0,1)
print(i)
[1,2,3,5]
i.insert(2,4)
print(i)
[1,2,4,3,5]










