import csv
result = 0
with open('input.csv', 'r') as csvfile:
    reader = csv.reader(csvfile, delimiter="	", quoting=csv.QUOTE_NONNUMERIC)
    for row in reader:
        print 'Row: ',
        print row
        print 'Max value: ' + str(int(max(row)))
        print 'Min value: ' + str(int(min(row)))
        print 'Diff between max and min: ' + str(int(max(row) - (min(row))))
        print '------'
        result = result + (int(max(row)) - int(min(row)))
print '#############################'
print 'Sum of all diff: ' + str(int(result))
print '#############################'
