import csv
result = 0
with open('input.csv', 'r') as csvfile:
    reader = csv.reader(csvfile, delimiter="	", quoting=csv.QUOTE_NONNUMERIC)
    for row in reader:
        for i in row:
            for j in row:
                if (i != j) and (i % j) == 0:
                    print str(int(i)),
                    print ' divided by ',
                    print str(int(j)),
                    print ' equals: ',
                    division = (i / j)
                    print str(int(division))
                    result = result + division
                    print '------'
print '#############################'
print 'Sum of all divisions: ' + str(int(result))
print '#############################'
