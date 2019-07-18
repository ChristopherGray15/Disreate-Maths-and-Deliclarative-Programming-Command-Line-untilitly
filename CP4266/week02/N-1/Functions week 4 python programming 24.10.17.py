    
"""   
def read_number():
    n = int(input("enter an interger : "))
    return n

def add_numbers(num1,num2):
    s = num1 + num2
    return s
def display_msg(s):
    print (s)


def main():
    display_msg("this program inputs 2 integers and displays the sum")
    n1= read_number()
    n2+ read_number()
    total = add_numbers(n1, n2)
    display_msg("sum of%d and %d is %d" %(n1, n2, total))

main()
"""
"""
def read_number():
    n = int(input("enter an interger : "))
    return n
def display_msg(s):
    print (s)
def add(n1, n2):
    return n1 + n2
def multi(n1, n2):
    multiplication = n1 + n2
    return multiplication
def main():
    display_msg("this program inputs 2 integers and displays the sum")
    n1= read_number()
    n2= read_number()
    total = add(n1, n2)
    product = multi(n1,n2)
    display_msg("sum of numbers = %d and product of numbers = %d" %(total, product))

main() 
"""
"""
def volume(width, height, depth =2):
    return width *height * depth

print(volume(2, 3, 3))
print(volume(2, 3))
"""


"""
def store_data(data, db =[]):
    db.append(data)
    print(db)

store_data("one")
store_data("Two")
"""

"""
def get_name():
    first = input("enter your first name : ")
    last = input(" Enter your last name :")
    return first, last
"""


"""
def my (a,b,c) :
    a = a*2
    b = b*2
    c = c*2
    return a, b, c
"""


def calculate (a, b, operation):
    result = 0;
    if operation == "+":
        total = a + b
        
        
    elif operation == "-":
         total = a - b
         
        
        
    elif operation == "*":
         total = a * b
        
       
        
    elif operation == "/":
         total = a / b
        

        
    return a,b, operation, total

result = calculate(2,3, "*")
print(result)




























































