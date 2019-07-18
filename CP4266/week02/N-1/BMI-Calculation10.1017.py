#Bmicalculator
#ChrisGray
#S17117107
#values:,<18:underweight, 18-25: Normal, 25 -30: overweight, 30+: obese


name = input ("enter a name");
weight = float(input("enter your weight in kilograms(kg) : "));
height = float(input("enter your height in centimetres(cm): "));
bmi = weight /(height *height)
print(bmi)
print("%s has a BMI of: %10.7f"%(name,bmi))

            
