## A simple FLARUM Extension by GaNuongLaChanh
    
## What is it

It is only a simple plugin for Flarum support unicode when build slug.

## Change log

#### 01/05/2018

* Support flarum v0.1.0-beta.7
* Remove unused code

#### 01/14/2016(1)

* Support flarum v0.1.0-beta.3 and v0.1.0-beta.4
* Only support Vietnmese

#### 01/14/2016(2)

* Using `what?` version of http://jsperf.com/diacritics/12 when building slug. So it not only support Vietnamese language :)

#### 05/22/2016 (3)

* support flarum beta 5

## Install

Download zip file of this project, after that copy to extensions folder of flarum. Go to
 admin and active it. Have fun!!!
 
By `composer` add

    "ganuonglachanh/flarum-vn-slug": "dev-master"
    
after that run

    flarum migrate

### Update from 0.1.0beta4

    composer update ganuonglachanh/flarum-vn-slug
    flarum migrate
    
    
 ### install
    composer require ganuonglachanh/flarum-vn-slug:*@dev
