<?php

$this->title = 'Главная';

?>
<div class="h-md-full">
  <?= $this->render('-slider') ?>
  <section class="section my-auto">
    <div class="container">
      <h2 class="title text-center">Комфортное ожидание</h2>
      <div class="row">
        <div class="col-4 col-sm text-center">
          <i class="i-6 blue em-30 em-sm-50"></i>
          <h3 class="text mt-10 em-8 em-sm-13">Бесплатный<br>Wi-Fi</h3>
        </div><!--/.col-->
        <div class="col-4 col-sm text-center">
          <i class="i-9 blue em-30 em-sm-50"></i>
          <h3 class="text mt-10 em-8 em-sm-13">Вкусный<br>кофе</h3>
        </div><!--/.col-->
        <div class="col-4 col-sm text-center">
          <i class="i-18 blue em-30 em-sm-50"></i>
          <h3 class="text mt-10 em-8 em-sm-13">Удобная<br>зона отдыха</h3>
        </div><!--/.col-->
      </div><!--/.row-->
    </div><!--/.container-->
  </section><!--/.section-->
</div><!--/.h-md-full-->

<section class="section" id="price">
  <div class="container">
    <h2 class="title text-center">Мы решим вашу проблему</h2>
    <div class="row align-items-stretch">
      <div class="col-12 col-lg-6 br-lg-lgray">
        <div class="row align-items-stretch">
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-1">
              <i class="i-1 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Авто<br>шиномонтаж</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-2">
              <i class="i-8 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Ремонт<br>литых дисков</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-3">
              <i class="i-11 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Ремонт<br>проколов</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-4">
              <i class="i-13 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Аргонная<br>сварка</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-5">
              <i class="i-14 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Порошковая<br>покраска дисков</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-6">
              <i class="i-15 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Мото<br>шиномонтаж</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-7">
              <i class="i-16 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Ремонт<br>автостекол</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-8">
              <i class="i-17 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Заправка<br>кондиционера</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-9">
              <i class="i-12 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Хранение<br>шин и дисков</h3>
            </a>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-15">
            <a class="calc-btn js-calc-btn" href="#js-calc-item-10">
              <i class="i-10 calc-btn-i"></i>
              <h3 class="calc-btn-txt">Доп<br> услуги</h3>
            </a>
          </div><!--/.col-->
        </div><!--/.row-->
        <div id="js-cforms-mark"></div>
        <div class="divider"></div>
        <p class="text text-center fwgt-600 em-11">
          Точная стоимость<br>ремонта и время проведения<br>определяется мастером на месте.
        </p>
        <div class="row">
          <div class="col-6 text-center">
            <i class="i-7 em-30 blue"></i>
            <h3 class="text em-8 em-sm-10">Действует гарантия на<br>выполненные работы</h3>
          </div><!--/.col-->
          <div class="col-6 text-center">
            <i class="i-5 em-30 blue"></i>
            <h3 class="text em-8 em-sm-10">Дпя постоянных клиентов<br>действует скидка - 10%</h3>
          </div><!--/.col-->
        </div><!--/.row-->
      </div><!--/.col-->
      <div class="col-12 col-lg-6 calc-form-col">
        <div class="divider d-lg-none"></div>
        <div class="js-calc-parent">
          <div class="collapse" id="js-calc-item-1">
            <div class="row">
              <div class="col-12 col-md-6">
                <label class="label">Автомобиль</label>
                <select class="input js-calc-input" id="js-calc-input-1">
                  <option selected disabled>Выберите</option>
                  <option value="{'pi':'0','l':'Легковой'}">Легковой</option>
                  <option value="{'pi':'1','l':'Джип'}">Джип</option>
                  <option value="{'pi':'1','l':'Микроавтобус'}">Микроавтобус</option>
                  <option value="{'pi':'1','l':'Минивен'}">Минивен</option>
                  <option value="{'pi':'1','l':'Кроссовер'}">Кроссовер</option>
                </select>
                <label class="label">Радиус диска</label>
                <select class="input js-calc-input" id="js-calc-input-2">
                  <option selected disabled>Выберите</option>
                  <option value="{'i':'0','r':'13'}">13</option>
                  <option value="{'i':'1','r':'14'}">14</option>
                  <option value="{'i':'2','r':'15'}">15</option>
                  <option value="{'i':'3','r':'16'}">16</option>
                  <option value="{'i':'4','r':'17'}">17</option>
                  <option value="{'i':'5','r':'18'}">18</option>
                  <option value="{'i':'6','r':'19'}">19</option>
                  <option value="{'i':'7','r':'20'}">20</option>
                  <option value="{'i':'8','r':'21'}">21</option>
                  <option value="{'i':'9','r':'22'}">22</option>
                  <option value="{'i':'10','r':'23'}">23</option>
                  <option value="{'i':'11','r':'24'}">24</option>
                </select>
                <label class="label">Количество колес</label>
                <select class="input js-calc-input" id="js-calc-input-3">
                  <option selected disabled>Выберите</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div><!--/.col-->
              <div class="col-12 col-md-6">
                <label class="label">Нужен съем/установка?</label>
                <select class="input js-calc-input" id="js-calc-input-4">
                  <option selected disabled>Выберите</option>
                  <option value="[
                    {'p':['80','0'],'l':'съем/установка'},
                    {'p':['100','140'],'l':'съем/установка'},
                    {'p':['120','160'],'l':'съем/установка'},
                    {'p':['140','180'],'l':'съем/установка'},
                    {'p':['160','200'],'l':'съем/установка'},
                    {'p':['180','240'],'l':'съем/установка'},
                    {'p':['200','220'],'l':'съем/установка'},
                    {'p':['240','290'],'l':'съем/установка'},
                    {'p':['280','340'],'l':'съем/установка'},
                    {'p':['320','390'],'l':'съем/установка'},
                    {'p':['360','440'],'l':'съем/установка'},
                    {'p':['400','490'],'l':'съем/установка'}
                  ]">Да</option>
                  <option value="null">Нет</option>
                </select>
                <label class="label">Нужен монтаж/демонтаж?</label>
                <select class="input js-calc-input" id="js-calc-input-5">
                  <option selected disabled>Выберите</option>
                  <option value="[
                    {'p':['120','0'],'l':'монтаж/демонтаж'},
                    {'p':['150','200'],'l':'монтаж/демонтаж'},
                    {'p':['180','230'],'l':'монтаж/демонтаж'},
                    {'p':['210','260'],'l':'монтаж/демонтаж'},
                    {'p':['240','290'],'l':'монтаж/демонтаж'},
                    {'p':['270','320'],'l':'монтаж/демонтаж'},
                    {'p':['300','350'],'l':'монтаж/демонтаж'},
                    {'p':['360','420'],'l':'монтаж/демонтаж'},
                    {'p':['420','490'],'l':'монтаж/демонтаж'},
                    {'p':['510','590'],'l':'монтаж/демонтаж'},
                    {'p':['600','690'],'l':'монтаж/демонтаж'},
                    {'p':['690','790'],'l':'монтаж/демонтаж'}
                  ]">Да</option>
                  <option value="null">Нет</option>
                </select>
                <label class="label">Нужна балансировка?</label>
                <select class="input js-calc-input" id="js-calc-input-6">
                  <option selected disabled>Выберите</option>
                  <option value="[
                    {'p':['150','0'],'l':'балансировка'},
                    {'p':['180','240'],'l':'балансировка'},
                    {'p':['210','270'],'l':'балансировка'},
                    {'p':['240','300'],'l':'балансировка'},
                    {'p':['270','330'],'l':'балансировка'},
                    {'p':['300','360'],'l':'балансировка'},
                    {'p':['330','390'],'l':'балансировка'},
                    {'p':['390','460'],'l':'балансировка'},
                    {'p':['450','530'],'l':'балансировка'},
                    {'p':['540','630'],'l':'балансировка'},
                    {'p':['630','730'],'l':'балансировка'},
                    {'p':['720','830'],'l':'балансировка'}
                  ]">Да</option>
                  <option value="0">Нет</option>
                </select>
              </div><!--/.col-->
            </div><!--/.row-->
            <label class="checkbox">
              <input type="checkbox" class="checkbox-input js-calc-input" id="js-calc-input-7">
              <span class="checkbox-box"></span>
              <span class="checkbox-label">Усиленные шины RUNFLAT</span>
            </label>
            <label class="checkbox">
              <input type="checkbox" class="checkbox-input js-calc-input" id="js-calc-input-8">
              <span class="checkbox-box"></span>
              <span class="checkbox-label">Колеса OFF ROAD</span>
            </label>
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
            <!--
            <div class="calc-itotal">
              <p class="text d-flex justify-content-between">
                <span class="d-block">
                  4 колеса, R15, 123
                </span>
                <span class="d-block fwgt-700">
                  2 040<i class="i-20 em-8"></i>
                  <a class="js-rm-item ml-5" href="javascript:;"><i class="i-29"></i></a>
                </span>
              </p>
              <p class="text">
                <span class="d-block mb-5 bi bi-check">съем/установка</span>
                <span class="d-block mb-5 bi bi-check">съем/установка</span>
                <span class="d-block mb-5 bi bi-check">съем/установка</span>
                <span class="d-block mb-5 bi bi-check">съем/установка</span>
                <span class="d-block mb-5 bi bi-check">съем/установка</span>
                <span class="d-block mb-5 bi bi-check">съем/установка</span>
              </p>
              <p class="text mb-5 bi bi-check">съем/установка</p>
              <p class="text mb-5 bi bi-check">съем/установка</p>
              <p class="text mb-5 bi bi-check">съем/установка</p>
            </div>
            -->
            <!--/.calc-itotal-->
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-2">
            <div class="row">
              <div class="col-12 col-md-6">
                <label class="label">Вид диска</label>
                <select class="input js-calc-input" id="js-calc-input-9">
                  <option selected disabled>Выберите</option>
                  <option value="{'pi':'0','label':'Стальные'}">Стальные</option>
                  <option value="{'pi':'1','label':'Литые'}">Литые</option>
                  <option value="{'pi':'2','label':'Косметика'}">Косметика</option>
                </select>
              </div><!--/.col-->
              <div class="col-12 col-md-6">
                <label class="label">Радиус</label>
                <select class="input js-calc-input" id="js-calc-input-10">
                  <option selected disabled>Выберите</option>
                  <option value="{'r':'13','p':['500','600','400']}">13</option>
                  <option value="{'r':'14','p':['600','750','600']}">14</option>
                  <option value="{'r':'15','p':['650','1000','850']}">15</option>
                  <option value="{'r':'16','p':['700','1350','1200']}">16</option>
                  <option value="{'r':'17','p':['0','1700','1550']}">17</option>
                  <option value="{'r':'18','p':['0','2050','1900']}">18</option>
                  <option value="{'r':'19','p':['0','2400','2250']}">19</option>
                  <option value="{'r':'20','p':['0','2750','2600']}">20</option>
                  <option value="{'r':'21','p':['0','3150','3000']}">21</option>
                  <option value="{'r':'22','p':['0','3550','3400']}">22</option>
                </select>
              </div><!--/.col-->
            </div><!--/.row-->
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-3">
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-11"
                value="{'p':'750','label':'Ремонт шины жгутом'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Ремонт шины жгутом</span>
                <span class="fwgt-600 spnwr ml-10">750<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-12"
                value="{'p':'350','label':'Ремонт шины пластырем'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Ремонт шины пластырем</span>
                <span class="fwgt-600 spnwr ml-10">от 350<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-13"
                value="{'p':'250','label':'Шлифовка борта'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Шлифовка борта</span>
                <span class="fwgt-600 spnwr ml-10">от 250<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-14"
                value="{'p':'100','label':'Ремонт камеры'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Ремонт камеры</span>
                <span class="fwgt-600 spnwr ml-10">от 100<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-15"
                value="{'p':'500','label':'Варка (вулканизация)'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Варка (вулканизация)</span>
                <span class="fwgt-600 spnwr ml-10">от 500<i class="i-20 em-8"></i> до 2000<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-4">
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-16"
                value="{'p':'150','label':'Варка аргоном'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Варка аргоном</span>
                <span class="fwgt-600 spnwr ml-10">от 150<i class="i-20 em-8"></i>/см</span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-17"
                value="{'p':'200','label':'Наварка диска'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Наварка диска</span>
                <span class="fwgt-600 spnwr ml-10">от 200<i class="i-20 em-8"></i>/см</span>
              </span>
            </label>
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-5">
            <div class="row">
              <div class="col-12 col-md-6">
                <label class="label">Радиус</label>
                <select class="input js-calc-input" id="js-calc-input-18">
                  <option selected disabled>Выберите</option>
                  <option value="{'p':'1700','label':'13'}">13</option>
                  <option value="{'p':'1800','label':'14'}">14</option>
                  <option value="{'p':'1900','label':'15'}">15</option>
                  <option value="{'p':'2100','label':'16'}">16</option>
                  <option value="{'p':'2400','label':'17'}">17</option>
                  <option value="{'p':'2800','label':'18'}">18</option>
                  <option value="{'p':'3300','label':'19'}">19</option>
                  <option value="{'p':'3800','label':'20'}">20</option>
                  <option value="{'p':'4300','label':'21'}">21</option>
                  <option value="{'p':'4800','label':'22'}">22</option>
                  <option value="{'p':'5300','label':'23'}">23</option>
                  <option value="{'p':'5800','label':'24'}">24</option>
                </select>
              </div><!--/.col-->
              <div class="w-100"></div>
              <div class="col-12 col-md-6">
                <label class="label">Количество дисков</label>
                <select class="input js-calc-input" id="js-calc-input-19">
                  <option selected>Выберите</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div><!--/.col-->
            </div><!--/.row-->
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-20"
                value="Разборные">
              <span class="checkbox-box"></span>
              <span class="checkbox-label">Разборные +20%</span>
            </label>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-21"
                value="Комбинированные">
              <span class="checkbox-box"></span>
              <span class="checkbox-label">Комбинированные +100%</span>
            </label>
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-6">
            <div class="row">
              <div class="col-12 col-md-6">
                <label class="label">Радиус</label>
                <select class="input js-calc-input" id="js-calc-input-22">
                  <option selected disabled>Выберите</option>
                  <option value="{'r':'13'}">13</option>
                  <option value="{'r':'14'}">14</option>
                  <option value="{'r':'15'}">15</option>
                  <option value="{'r':'16'}">16</option>
                  <option value="{'r':'17'}">17</option>
                  <option value="{'r':'18'}">18</option>
                  <option value="{'r':'19'}">19</option>
                </select>
              </div><!--/.col-->
            </div><!--/.row-->
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-23"
                value="{'p':'750','label':'Снять/поставить'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Снять/поставить</span>
                <span class="fwgt-600 spnwr ml-10">750<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-24"
                value="{'p':'1700','label':'Ремонт диска'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Ремонт диска</span>
                <span class="fwgt-600 spnwr ml-10">1700<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-25"
                value="{'p':'2200','label':'Шиномонтаж'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Шиномонтаж</span>
                <span class="fwgt-600 spnwr ml-10">2200<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-26"
                value="{'p':'2700','label':'Балансировка'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Балансировка</span>
                <span class="fwgt-600 spnwr ml-10">2700<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-7">
            <label class="checkbox">
              <input
                type="radio"
                value="{'p':'750','l':'Скол до 1см'}"
                class="checkbox-input js-calc-input"
                id="js-calc-input-27"
                name="ri7">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Скол до 1см</span>
                <span class="fwgt-600 spnwr ml-10">750<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="radio"
                value="{'p':'1400','l':'Скол до 2см'}"
                class="checkbox-input js-calc-input"
                id="js-calc-input-28"
                name="ri7">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Скол до 2см</span>
                <span class="fwgt-600 spnwr ml-10">1400<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="radio"
                value="{'p':'1800','l':'Скол до 3см'}"
                class="checkbox-input js-calc-input"
                id="js-calc-input-29"
                name="ri7">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Скол до 3см</span>
                <span class="fwgt-600 spnwr ml-10">1800<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                value="{'p':'700','l':'Остановка трещины'}"
                class="checkbox-input js-calc-input"
                id="js-calc-input-30">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Остановка трещины</span>
                <span class="fwgt-600 spnwr ml-10">700<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                value="{'p':'50','l':'Ремонт трещины 50 руб/см'}"
                class="checkbox-input js-calc-input"
                id="js-calc-input-31">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Ремонт трещины</span>
                <span class="fwgt-600 spnwr ml-10">50<i class="i-20 em-8"></i>/см</span>
              </span>
            </label>
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-8">
            <label class="checkbox">
              <input
                value="{'p':'2000','l':'Заправка кондиционера'}"
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-32">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Заправка кондиционера</span>
                <span class="fwgt-600 spnwr ml-10">2000<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-9">
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-33"
                name="ri9"
                value="{'p':'4000','l':'Шины с дисками'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Шины с дисками</span>
                <span class="fwgt-600 spnwr ml-10">4000<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-34"
                name="ri9"
                value="{'p':'3000','l':'Шины без дисков'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Шины без дисков</span>
                <span class="fwgt-600 spnwr ml-10">3000<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="js-calc-item-total"></div>
            <div class="divider"></div>
            <p class="label">Экономьте свои силы, время и место. Сезонное хранение шин и дисков у нас – оптимальное решение ответственного автовладельца!</p>
            <p class="text em-11">
              <span class="d-block mb-5 bi bi-list">специальный стеллаж для длительного хранения колес;</span>
              <span class="d-block mb-5 bi bi-list">отапливаемый бокс  с регулировкой температуры и влажности воздуха защищает диски от коррозии и повреждения лакокрасочного слоя;</span>
              <span class="d-block bi bi-list">уникальная маркировка предохраняет их от путаницы и потери.</span>
            </p>
            <p class="label">Мы не только храним ваши колеса, но и готовим их к эксплуатации в следующем сезоне</p>
            <p class="text em-11">
              <span class="d-block mb-5 bi bi-list">выполнить пескоструйную очистку или дробеструйную обработку колес;</span>
              <span class="d-block mb-5 bi bi-list">обновить покрытие дисков – сделать порошковую или полимерную покраску;</span>
              <span class="d-block bi bi-list">проверить и поправить геометрию дисков.</span>
            </p>
          </div><!--/.collapse-->
          <div class="collapse" id="js-calc-item-10">
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-35"
                value="{'p':'60','l':'Очистка 1 посадочного места'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Очистка 1 посадочного места</span>
                <span class="fwgt-600 spnwr ml-10">60<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-36"
                value="{'p':'240','l':'Установка вентиля (4шт. черные)'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Установка вентиля (4шт. черные)</span>
                <span class="fwgt-600 spnwr ml-10">240<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-37"
                value="{'p':'400','l':'Установка вентиля (4шт. хром)'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Установка вентиля (4шт. хром)</span>
                <span class="fwgt-600 spnwr ml-10">400<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-38"
                value="{'p':'70','l':'Уплотнение бортов герметиком'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Уплотнение бортов герметиком</span>
                <span class="fwgt-600 spnwr ml-10">от 70<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-39"
                value="{'p':'25','l':'Подкачка 1 колеса'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Подкачка 1 колеса</span>
                <span class="fwgt-600 spnwr ml-10">25<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-40"
                value="{'p':'250','l':'Шлифовка борта'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Шлифовка борта</span>
                <span class="fwgt-600 spnwr ml-10">250<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <div class="divider"></div>
            <label class="checkbox">
              <input
                type="checkbox"
                class="checkbox-input js-calc-input"
                id="js-calc-input-41"
                value="{'p':'100','l':'Ремонт камеры'}">
              <span class="checkbox-box"></span>
              <span class="checkbox-label w-100 d-flex justify-content-between align-items-end">
                <span>Ремонт камеры</span>
                <span class="fwgt-600 spnwr ml-10">100<i class="i-20 em-8"></i></span>
              </span>
            </label>
            <!--=include ./tpl/-store.html-->
            <div class="js-calc-item-total"></div>
          </div><!--/.collapse-->
        </div><!--/.js-calc-parent-->
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.section-->

<section class="section">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-12 col-lg-7 order-2 order-lg-1">
        <h2 class="title">Expert shin - для тех, кто ценит свое средство передвижения.</h2>
        <div class="row">
          <div class="col-12 col-sm-6 mb-10">
            <div class="d-flex align-items-center">
              <div class="mr-15 mb-15"><i class="i-2 em-30 blue"></i></div>
              <div><h3 class="text">Профессиональное<br>оборудование</h3></div>
            </div>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-10">
            <div class="d-flex align-items-center">
              <div class="mr-15 mb-15"><i class="i-23 em-30 blue"></i></div>
              <div><h3 class="text">Опытные<br>специалисты</h3></div>
            </div>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-10">
            <div class="d-flex align-items-center">
              <div class="mr-15 mb-15"><i class="i-3 em-30 blue"></i></div>
              <div><h3 class="text">Комплексный<br>подход</h3></div>
            </div>
          </div><!--/.col-->
          <div class="col-12 col-sm-6 mb-10">
            <div class="d-flex align-items-center">
              <div class="mr-15 mb-15"><i class="i-22 em-30 blue"></i></div>
              <div><h3 class="text">Гарантия<br>работы</h3></div>
            </div>
          </div><!--/.col-->
        </div><!--/.row-->
        <p class="text mb-25">Зачем продлевать деталям жизнь, если их можно заменить? Наша цель - это долгосрочное сотрудничество. Поэтому мы думаем о вашем комфорте и безопасности, чем об одноразовой выручке.</p>
        <a class="btn btn-blue w-sm-50 mx-auto" data-fancybox href="#callback-modal">Оставить заявку</a>
      </div><!--/.col-->
      <div class="col-12 col-lg-5 order-1 order-lg-2">
        <img class="img-a" width="591" height="462" src="img/img-1.jpg">
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.section-->

<section class="section">
  <div class="container">
    <h2 class="title text-center">Сезонное хранение шин и колесных дисков.</h2>
    <div class="w-lg-80">
      <p class="text fwgt-600">Не стоит загромождать свою лоджию или гараж – храните диски и шины у нас!</p>
      <p class="text fwgt-600">Высококачественный сервис:</p>
      <p class="text">
        <span class="d-block mb-5 bi bi-list">специальный стеллаж для длительного хранения колес;</span>
        <span class="d-block mb-5 bi bi-list">отапливаемый бокс с регулировкой температуры и влажности воздуха защищает диски от коррозии и повреждения лакокрасочного слоя;</span>
        <span class="d-block mb-5 bi bi-list">уникальная маркировка предохраняет их от путаницы и потери.</span>
      </p>
      <p class="text fwgt-600">Мы не только храним Ваши колеса, но и готовим их к эксплуатации в следующем сезоне:</p>
      <p class="text">
        <span class="d-block mb-5 bi bi-list">выполнить пескоструйную очистку или дробеструйную обработку колес;</span>
        <span class="d-block mb-5 bi bi-list">обновить покрытие дисков – сделать порошковую или полимерную покраску;</span>
        <span class="d-block mb-5 bi bi-list">проверить и поправить геометрию дисков.</span>
      </p>
    </div><!--/.w-->
  </div><!--/.container-->
</section><!--/.section-->

<section class="section">
  <div class="container">
    <div class="wall-shadow corner-tr-blue w-lg-80 mx-auto">
      <h3 class="title text-center" >Экономь время и деньги.<br>Оставь заявку сейчас и получи скидку на диагностику 5%.</h3>
      <form class="js-form" event-name="discount">
        <input type="hidden" name="type" value="Получить скидку на диагностику 5%">
        <div class="row">
          <div class="col-12 col-md-4">
            <input class="input" type="text" name="name" placeholder="Имя" validate="text">
          </div><!--/.col-->
          <div class="col-12 col-md-4">
            <input class="input js-mask" mask="+7-999-999-99-99" type="text" name="phone" placeholder="Телефон" validate="text">
          </div><!--/.col-->
          <div class="col-12 col-md-4">
            <button class="btn btn-blue input-h js-form-progress">Отправить</button>
          </div><!--/.col-->
        </div><!--/.row-->
      </form>
      <p class="text gray"><span class="blue">*</span> Нажимая на кнопку &laquo;Оставить заявку&raquo;, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a class="spnwr" data-fancybox href="#policy">политики конфиденциальности</a></p>
    </div><!--/.wall-->
  </div><!--/.container-->
</section><!--/.section-->

<?= $this->render('-s-contact') ?>
