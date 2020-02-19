# Base Utilites

### DateOffset

`inc` - increase, `dec` - decrease. Time periods:

* Sec
* Min
* Hour
* Day
* Month

```
DateOffset::incSec($sec = 1, $time = null);
DateOffset::decDay($day = 1, $time = null);
```

The first parameter is the period(default 1). 
The second parameter is optional - time, timestamp. 
If not specified, countdown from now.

```
DateOffset::incDay(5); // from now, time() + 5 days
DateOffset::decHour(); // 1 hour ago (default 1)
DateOffset::decDay(2, '2020-02-02 20:20:02'); 
// 2020-01-31 20:20:02
```

```
DateOffset::offset($sec, $time = null, $negative = false);
```
