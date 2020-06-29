# Tables

## Adress
|Address||
|-|-|
|id||
|number (integer)|unique|
|street1 (text)||
|street2 (text)|nullable|
|streetNumber (integer)|nullable|
|PObox (string)|nullable|
|city_id|city - belongsTo|
||person - hasMany|
||adressType - belongsTo|


## AddressType
|AdressType||
|-|-|
|id||
|description (text)||
|company_id|compagny - hasMany|
|adress_id|address - hasMany|

## Badge
|Badge||
|-|-|
|id||
|number (string)|unique|
|client_id|client - belongsTo|
|testday_id|testday - belongsTo|
|edition_id|edition - belongsTo|
|event_id|event - belongsTo|

> client est peut-être person_id, à contrôler

## Bike
|Bike||
|-|-|
|id||
|framSize (string)|nullable|
|frameUnite (string)|nullable|
|rimSize (string)|nullable|
|rimUnit (string)|nullable|
|product_id|product - belongsTo|


## Brand
|Brand||
|-|-|
|id||
|name (string)|unique|
|shortDescr (string)||
|longDescr (string)|nullable|
|compagny_id|company - belongsTo|
||product - hasMany|
||edition - hasMany|

## City
|City||
|-|-|
|id||
|postaleCode (integer)|unique|
|name (string)|unique|
|canton (string)|nullable|
|contry_id|contry - belongsTo|
||address - hasMany|

## Client
|Client||
|-|-|
|id||
|homeCanton (string)|nullable|
|person_id|person - belongsTo|
||badge - hasMany|
||test - hasMany|


## Company
|Company||
|-|-|
|id||
|number (integer)|unique|
|name (string)||
||brand - hasMany|
||adresstype - hasMany|
||contact - hasMany|

## Contact
|Contact||
|-|-|
|id||
|since (date)||
|until (string)|nullable|
|person_id|person - belongsTo|
|company_id|compagny - belongdTo|

## Country
|Country||
|-|-|
|id||
|name (string)|unique|
|code (string)||
||city - hasMany|


## Edition
|Edition||
|-|-|
|id||
|number (integer)|unique|
|place (string)||
|startDate (string)||
|endDate (string)||
|event_id|event - belongsTo|
||job - hasMany|
||testday - hasMany|
||brand - hasMany|

> table pivot "Presentation"


## Event
|Event||
|-|-|
|id||
|name (string)||
||edition - hasMany|

> besoin de timestamps ?


## Invitation
|Invitation||
|-|-|
|id||
|event_id||
|edition_id||
|brand_id||

> table pivot ??

## Job
|Job||
|-|-|
|id||
|description (enum)| [Direction,Information,Accueil, Bar, Cuisine, Autre]|
|event_id|event - hasMany|
|edition_id|edition - hasMany|
|staff_id|staff - hasMany|


## Person
|Person||
|-|-|
|id||
|number (string)|unique|
|name (string)||
|firstname (string)||
|phonenumber1 (string)|nullable|
|phonenumber2 (string)|nullable|
|email1 (string)|nullable|
|email2 (string)|nullable|
|comment (text)|nullable|
|adress_id|address - blongsTo|
||contact - belongsTo|
||client - belongsTo|
||staff - belongsTo|

## Presentation
|Presentation||
|-|-|
|id||
|event_id||
|edition_id||
|product_id||

> tabel pivot ?


## Product
|Product||
|-|-|
|id||
|number (integer)|unique|
|shortDescr (string)||
|longDescr (string)|nullable|
|distinctiveSign (string)|nullable|
|lienWeb (string)|nullable|
|brand_id|brand - belongsTo|
||test - hasMany|
||bike - belongsTo|


## Staff
|Staff||
|-|-|
|id||
|person_id|person - belongsTo|
||job - belongsTo|

> table pivot ??

## Test 
|Test||
|-|-|
|id||
|number (interger)||
|startTime (interger)||
|endTime (interger)||
|feedback (string)||
|testDay_id|testday - belongsTo|
|edition_id|edition - belongsTo|
|event_id|event - beongsTo|
|product_id|product - belongsTo|
|client_id|client - belongsTo|

## TestDay
|TestDay||
|-|-|
|id||
|date (date)||
|startHour (time)||
|endHour (time)||
|event_id|event - belongsTo|
|edition_id|edition - belongsTo|
||badge - hasMany|
||test - hasMany|