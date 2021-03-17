

# Supermarket


## You received a task to model a supermarket's depot. A supermarket has a lot of stuff in different categories. Here are the requirements you need to take care of. 


### The store sells shovels, trucks and milk. 


## All products have a brand name and a unique depot code. 

### Shovels can be small, normal and big and can be made of steel, plastic, or chocolate. Unfortunately, chocolate shovels have a chance of get stolen. The smaller the shovel is, the greater the chance to get stolen (pick the probabilities as you wish, e.g. 20%-40%-60%). 

### It turned out that the people who wants to buy a truck are mainly interested in the number of wheels of the truck, so we should store this parameter. The hype about the wheels is actually so high that people always want to buy a truck with the fashionable number of wheels. 

### Milk products have a limit of storage temperature. If the temperature climbs above this point, the milk goes sour. 

### The supermarket keeps a huge list of its products. The management regularly needs a report that prints the number of sellable items in each category. 

### Before each report, the fashionable number of wheels and the temperature of the supermarket must be set, and the unsellable products need to get marked: all the stolen shovels, unfashionable trucks, and sour milk boxes. 

### After the report, some cleaning up is needed. 

### Stolen chocolate shovels are gone, they must be taken off the list. 

### Naturally, unhip trucks may have a comeback, so you don’t need to do anything about them. 

### Sour boxes of milk must be collected and taken to the National School Cafeteria. 

## Hints : you should have an abstract class, use inheritance, data hiding and make sure there is no code repetition. 
