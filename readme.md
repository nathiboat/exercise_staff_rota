## About project 

We have staff rota shift data stored in the database as attached. We have included the data for one shop for one week. (If staff ID is 0 or null, the shiftcan be ignored or If shiftype is not �shift� then it can be ignored) 

### Important part:
>Staff get paid a bonus for working alone in the shop. 
Underneath that totals row, we need to see for each day, how many minutes of the day are being worked by staff members *alone in the shop*.
For example, a value of "45" under a day would represent that there are a total of 45 minutes in that day where there is a member of staff working alone in the shop.

## Output:
>Load the data from the database
Create a view to display the output as follows....
Display the shift times per shift (start and end times) in a table, (days in columns, staff in rows)
At the bottom of each day, Show the total number of hours/minutes worked on that day.

## Testing 
