'''
def create_new_file():
    file = open("First_python_File.txt" ,  "r")
    file.write("First line \n")
    file.write(" Second line \n")
    file.write("Third line \n")
    file.close()
    print ("File created")

    


create_new_file()
'''
'''
file =open("what_is_python.txt", "r" )
line = file.readline()
pythonCounter = 0
while line !='':
        print(line)
        line = file.readline()
        print(line)
        pythonCounter += line.split().count("Python")
        

file.close()
print(pythonCounter)
'''    
''' Program make a simple calculator that can add, subtract, multiply and divide using functions '''

# This function adds two numbers 
def add(x, y): 
   return x + y

# This function subtracts two numbers 
def subtract(x, y): 
   return x - y 


def multiply(x, y): 
   return x * y


def divide(x, y):
   return x / y


def main():
   while True:
         print("\nSelect operation.")
         print("1.Add")
         print("2.Subtract")
         print("3.Multiply")
         print("4.Divide")

          
         choice = input("Enter choice(1/2/3/4):")

         num1 = int(input("Enter first number: "))
         num2 = int(input("Enter second number: "))

         if choice == '1': 
            print(num1,"+",num2,"=", add(num1,num2))

         elif choice == '2':
            print(num1,"-",num2,"=", subtract(num1,num2)) 

         elif choice == '3':
            print(num1,"*",num2,"=", multiply(num1,num2))

         elif choice == '4': 
            print(num1,"/",num2,"=", divide(num1,num2))
         else:
            print("Invalid input")

main()
