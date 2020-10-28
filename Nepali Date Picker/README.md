# Nepali Multi Date Picker
A simple yet powerful date picker based in Nepali calendar. Supports both single date selections and multiple date selection. Can be used inline with form input. Multiple date selection can be done by pressing Shift or Control / Command key.

## DEMO

Check working demo <a href="https://sonill.github.io/Nepali-Multi-Date-Picker/">here</a>

## Getting Started

### Installing

Include these files

```
<script src="/path/to/jquery.js"></script><!-- jQuery is required -->
<link  href="/path/to/nepali-date-picker.css" rel="stylesheet">
<script src="/path/to/nepali-date-picker.js"></script>
```

## Usage

Initialize with $.fn.nepaliDatePicker method.

```
<input class="datepicker">
$('.datepicker').nepaliDatePicker();
```

## Single or Multiple Selection Mode

By default it is in multiple date selection mode. If you want to use single date selection mode then just add ```data-single="true"``` in your markup.

```
<input class="datepicker" data-single="true">
```

## Options

In multiple date selection mode, selected date can be displayed in 3 different ways.
* If only 1 date is selected, then it will show selected date as value in input field.
* If more than 1 date is selected, then following message will be shown in input field:
  ````
  * dates selected
  ````
* To show multiple dates as value, use ````data-show_all_dates="true"```` in input field.


## Authors

* **Sanil Shakya** - (https://www.sanil.com.np)


## License

See the <a href="https://github.com/sonill/Nepali-Multi-Date-Picker/blob/master/LICENSE">License file</a> for details
