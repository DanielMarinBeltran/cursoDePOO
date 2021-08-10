from car import Car

if __name__ == "__main__":
    print('Hola mundo')
    car = Car()
    car.license = "AMS123"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "QWE987"
    car2.driver = "Andrea Hernandez"
    print(vars(car2))