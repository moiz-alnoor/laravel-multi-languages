<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@if (Lang::locale() == 'ar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" integrity="sha512-xjgS6FfopzlmfecrVEJVL+rLIlaisOOu9Vj+5xkqZprQh6NX7rUXm1EQsnQpHnzZk7Vvjgz70/DQJdNax/umew==" crossorigin="anonymous" />
@endif
</head>
    <body>
    <ul class="nav nav-pills">
@if (Lang::locale() == 'ar')
  <li role="presentation"><a href="{{  URL::to("/en/sa")   }}">english</a></li>
   <li role="presentation"><a href="{{  URL::to("/ar/ae")   }}">ae</a></li>
     <li role="presentation"><a href="{{  URL::to("/ar/sa")   }}">sa</a></li>
  @endif
@if (Lang::locale() == 'en')
    <li role="presentation"><a href="{{  URL::to("/ar/sa")   }}">arabic</a></li>
   <li role="presentation"><a href="{{  URL::to("/en/ae")   }}">ae</a></li>
     <li role="presentation"><a href="{{  URL::to("/en/sa")   }}">sa</a></li>
       @endif
</ul>

<div class="container">
  <div class="row ">
    <div class="col-md-4">

        <span class="badge bg-light text-dark">
    <?php echo __('lang.title')?>
  </span>

<a href="#" >
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqI2jIfMUgRMlHp2LqNITmTq3bmWyNar9S6hYrgY04FbvFvO68jfFvqVMRt1e35_KjxACCa_I&usqp=CAc" alt="...">
    </a>
<br/>
    <p>     <?php echo __('lang.price')?>:   @if (session()->get('region') == 'ae') 333 AED @else 444  <?php echo __('lang.SAR')?> @endif </p>
    <p><?php echo __('lang.availability')?> :  4  <?php echo __('lang.days')?></p>
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  <?php echo __('lang.add-to-cart')?>
</button>
</div>
</div>
</div>



    </body>
</html>
