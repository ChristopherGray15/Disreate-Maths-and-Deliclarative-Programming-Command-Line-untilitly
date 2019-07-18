#Bmicalculator
#ChrisGray
#S17117107
#values:,<18:underweight, 18-25: Normal, 25 -30: overweight, 30+: obese

def BMI(w,h):       #defining the function
    a=w/h**2
    return a
name = input ("enter a name");
weight = float(input("enter your weight in kilograms(kg) : "));
height = float(input("enter your height in centimetres(cm): "));
bmi = weight /(height *height)     #call the function
print(bmi)
print("%s has a BMI of: %7.2f"%(name,bmi))
if bmi  <18:
    print("your are underweight")
elif bmi  <25:
    print("your are healthy")
elif bmi  <30:
    print("your are overweight")
elif bmi > 30:
    print("your are obese")


            
