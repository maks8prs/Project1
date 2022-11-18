<!DOCTYPE html> 
<html> 
<head> 
<title>My view</title> 
</head> 
<body> Первая переменная: {{ $var4 }} Вторая переменная: {{ $var3 }} 
@if($age>18)   
    вам уже есть 18 лет
    @elseif($age==18)
     вам ровно 18 лет
     @else
        вам еще нет 18 лет
    @endif

    @if($date>=7)
        сегодня воскресенья
        @endif
        @if($month==1)
           месяц январь
        @elseif($month==2)
                месяц февраль
        @elseif($month==3)
             месяц март
        @elseif($month==4)
             месяц апрель
        @elseif($month==5)
              месяц май
        @elseif($month==6)
              месяц июнь
        @elseif($month==7)
              месяц июль
        @elseif($month==8)
              месяц август
        @elseif($month==9)
              месяц сентябрь
        @elseif($month==10)
              месяц октябрь
        @elseif($month==11)
              месяц ноябрь
        @elseif($month==12)
            месяц декабрь
            @else
            неверно указан номер месяца
            @endif



        @if(count($pages)>0)
            echo count($pages)
            @else
            в массиве нет 1
         @endif
</body> 
</html>
