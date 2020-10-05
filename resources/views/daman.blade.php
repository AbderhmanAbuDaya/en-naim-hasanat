
@extends('layouts.app')
@section('style')

    <style>
        .topHero {
            background: #bbefef;
            border-radius: 16px;
            width: 100%;
        }
        .downHero {
            background: #b2e7e7;
            border-radius: 19px;
            margin-top: 26px;
            width: 100%;
        }
        .downHero label, .topHero label{
            font-size: 18px;
            font-weight: 500;
            margin: 14px 0px;
            margin-right: 2px;
        }
    </style>


@stop


@section('content')


          <div class="container">
          <div class="hero text-right" dir="rtl">

              <form>

             <div class="topHero">
                 <div class="row container m-1">
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label for="">رقم المعاملة</label>
                 <input type="number" class="w-50" id="transactionNumber" >
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label for="">تاريخ فتح الملف</label>
                 <input type="date" class="w-50" id="dateOpenFile" >
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label for="">وقت فتح الملف</label>
                 <input type="time" class="w-50" id="dateOpenFile" >
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label class="pl-sm-2" for="">العملة</label>
                 <select name="currency" class="px-sm-5" id="currency">
                     <option value="">شيقل</option>
                     <option value="">دولار</option>
                     <option value="">دينار</option>
                 </select>
                     </div>
                 <br>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label for="">رقم الهوية</label>
                 <input type="number" class="" id="idNumber" >
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label for="">الاسم</label>
                 <input type="text" class="" id="name" >
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                 <label for="">تاريخ الميلاد</label>
                 <input type="date" class="" id="dateBirth" >
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                     </div>
                 <br>
                     <div class="col-lg-4 col-md-7 col-sm-12 p-0">
                 <label for="">العنوان</label>
                 <select name="address" id="address">
                     <option value="">النصر</option>
                     <option value="">شيخ رضوان</option>
                     <option value="">الرمال</option>
                 </select>
                 <input type="text" class="" id="address2" >
                     </div>
                     <div class="col-lg-3 col-md-5 col-sm-12 p-0">
                 <label for=""> الجوال</label>
                 <input type="number" class="" id="mobile" >
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                 <label for="">الهاتف</label>
                 <input type="number" class="" id="telephone" >
                     </div>
                 </div>
             </div>
                  <div class="downHero">
                      <div class="row container m-1">
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                      <label for="">رقم المركبة</label>
                      <input type="number" class="" id="vehicleNumber" >
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                      <label for="">تاريخ السريان</label>
                      <input type="date" class="w-50" id="effectiveDate" >
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                      <label for="">نوع استخدام المركبة</label>
                      <select name="typeUseVehicle" id="typeUseVehicle">
                          <option value="">عمومي</option>
                          <option value="">خصوصي</option>
                          <option value="">تجاري</option>
                      </select>
                          </div>

                      <br>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                      <label for="">نوع المركبة</label>
                      <select name="vehicleType" class="w-50" id="vehicleType">
                          <option value="">كايا</option>
                          <option value="">نيسان</option>
                          <option value="">هونداي</option>
                      </select>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                      <label for="">اللون</label>
                      <select name="vehicleColor" class="w-50" id="vehicleColor">
                          <option value="">احمر</option>
                          <option value="">اصفر</option>
                          <option value="">بنفسجي</option>
                      </select>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                      <label for="">سنة الانتاج</label>
                      <input type="number" class="" id="yearProduction" >
                          </div>



                  <br>
                          <div class="col-lg-2 col-md-6 col-sm-12 p-0">

                  <label for="">عدد الركاب</label>
                  <select name="OccupantsNumber" id="OccupantsNumber">
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                  </select>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                  <label for="">رقم الهيكل</label>
                  <input type="number" class="" id="structureNumber" >
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                  <label for=""> وزن الاجمالي</label>
                  <input type="number" class="" id="weight" >
                          </div>
                  <br>
                          <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                  <label for="">قوة المحرك</label>
                  <input type="number" class="" id="enginePower" >
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                  <label for="">تاريخ بداية التامين</label>
                  <input type="date" class="w-50" id="dateStart" >
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                  <label for="">تاريخ نهاية التامين</label>
                  <input type="date" class="w-50" id="dateEnd" >
                          </div>

                  <br>
                          <div class="col-lg-2 col-md-6 col-sm-12 p-0">
                  <label for="">نوع التامين</label>
                  <select name="insuranceType" id="insuranceType">
                      <option value="">تامين</option>
                      <option value="">تامين</option>
                      <option value="">تامين</option>
                  </select>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                  <label for=""> حدود الالتزام</label>
                  <input type="text" class="w-50" id="limits"  >
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                  <label for=""> الاعفاء</label>
                  <input type="number" class="" id="exemption" >
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                  <label for=""> قيمة المركبة بشيقل</label>
                  <input type="number" class="" id="vehicleValue" >
                          </div>
                  <br>
                          <div class="col-lg-2 col-md-6 col-sm-12 p-0">
                  <label for="">الوكيل/الفرع</label>
                  <select name="branch" id="branch">
                      <option value="">تامين</option>
                      <option value="">تامين</option>
                      <option value="">تامين</option>
                  </select>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                  <label for=""> نسبة الخصم</label>
                  <input type="number" class="w-50" id="discount" >
                              <input class="" type="checkbox" value="" name="checkDiscount" id="checkDiscount">
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                  <label for=""> قيمة الخصم</label>
                  <input type="number" class="w-50" id="discountValue" >
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                  <label for="payValue">المبلغ المتفق للدفع</label>
                  <input type="number" class="w-50" id="payValue" >
                          </div>

                  <br>
                          <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                  <label class="mr-5" for="">الفئة:</label>
                  <select class="w-50" name="category" id="category">
                      <option value="">تامينتامينتامين</option>
                      <option value="">تامينتتامينامين</option>
                      <option value="">تامينتامينتامين</option>
                  </select>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                  <label class="mr-5" for=""> القالب :</label>
                  <select class="w-50" name="template" id="template">
                      <option value="">تامينتامينتامين</option>
                      <option value="">تامينتامينتامين</option>
                      <option value="">تامينتامينتامين</option>
                  </select>
                          </div>
                      </div>
                  </div>
                  <table class="table  ">
                      <thead class="thead-dark ">
                      <tr>
                          <th  scope="col">اصناف</th>
                          <th scope="col">المبلغ</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <td>القسط الاساسي شامل رسوم الاصدار</td>
                      <td>555</td>
                      </tr>
                      <tr>
                          <td>القسط الاساسي شامل رسوم الاصدار</td>
                          <td>555</td>
                      </tr>
                      <tr>
                          <td>القسط الاساسي شامل رسوم الاصدار</td>
                          <td>555</td>
                      </tr>
                      <tr>
                          <td>القسط الاساسي شامل رسوم الاصدار</td>
                          <td>555</td>
                      </tr>

                      </tbody>
                      <tfoot>
                      <tr>
                          <td>المجموع</td>
                          <td>6666</td>
                      </tr>
                      </tfoot>
                  </table>





              </form>

          </div>

          </div>

    @stop
