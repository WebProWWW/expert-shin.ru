#=include ./lib/jQueryMailer.coffee
#=include ./lib/MediaQuery.coffee


$body = $ 'body'
$htmlBody = $ 'html, body'
$win = $ window
$onscrl = $ '.js-onscrl'
$calcParent = $ '.js-calc-parent'


mq = new MediaQuery $win
# mq.isSM, mq.isMD, mq.isLG, mq.isXL


class GalSlider
  bxSlider: null
  @bxOptions:
    wrapperClass: 'bx-wrapper gslide-wrapper'
    controls: off
    pager: off
    slideMargin: 15
    infiniteLoop: off

  constructor: ($gslider) ->
    $slides = $gslider.find '.js-gslider-slides'
    $thumbs = $gslider.find '.js-gslider-thumb'
    @bxSlider = $slides.bxSlider GalSlider.bxOptions
    $thumbs.on 'click', (e) =>
      $thumb = $ e.currentTarget
      index = $thumb.attr 'data-index'
      @goToSlide index
      off

  goToSlide: (index) ->
    index = Number index
    @bxSlider.goToSlide? index if @bxSlider?
    on


$.fn.extend
  getValJSON: (index, defaultVal, attrVal) ->
    val = if attrVal? then this.attr attrVal else do this.val
    if val? and String(val) isnt 'null'
      parsed = JSON.parse String(val).replace /'/g, '"'
      if index? then parsed[index] else parsed
    else if defaultVal?
      defaultVal
    else
      no

  getValStr: (defaultVal) ->
    val = do this.val
    valStr = String val
    if val? and valStr isnt 'null'
      String val
    else if defaultVal?
      defaultVal
    else
      no

  getValNum: (defaultVal) ->
    val = do this.val
    valStr = String val
    if val? and valStr isnt 'null'
      Number val
    else if defaultVal?
      defaultVal
    else
      no

  isChecked: () ->
    this.is ':checked'

  collapse: (hide=on, atime=400, callBack=->) ->
    this.slideUp atime, callBack if hide
    this.slideDown atime, callBack unless hide
    this

  tagNameLower: () ->
    do this.prop('tagName').toLowerCase


delay = (ms, callBack) -> setTimeout callBack, ms


toggleCollapse = (blockId, atime = 400, callBack = ->) ->
  $(blockId).slideToggle atime
  delay atime, () -> do callBack
  on


scrollTo = (blockId, atime = 400, callBack) ->
  unless blockId? then return on
  if blockId is '#'
    offsetTop = 0
  else
    $block = $ blockId
    offsetTop = $block.offset().top - 53 if $block.length
  $htmlBody.animate scrollTop: offsetTop, atime
  delay atime, () -> do callBack if callBack?
  on


calcFormAnimating = no

showCalcItem = (id) ->
  $('.js-calc-btn').removeClass 'active'
  activeSelector = ".js-calc-btn[href=\"#{id}\"]"
  $(activeSelector).addClass 'active'
  $selected = $ String id
  unless calcFormAnimating
    calcFormAnimating = yes
    $notSelected = $calcParent.find('.collapse').not id
    # console.log $notSelected
    # console.log $selected.is(':hidden')
    unless mq.isLG
      $notSelected.collapse yes, 0
      scrollTo '#js-cforms-mark', 600, ->
        if $selected.is(':hidden')
          $selected.collapse no, 300, -> calcFormAnimating = no
        else
          calcFormAnimating = no
    else
      $notSelected.collapse yes, 300
      delay 300, ->
        if $selected.is(':hidden')
          $selected.collapse no, 300, -> calcFormAnimating = no
        else
          calcFormAnimating = no
  on


numToPrice = (num) -> String(Math.round num).replace /(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1 "


strToNum = (str) -> Number String(str).replace(/\s+/g, '')


animatePriceTo = ($price, strNum) ->
  fromNum = strToNum $($price[0]).text()
  toNum = strToNum strNum
  $div = $ document.createElement 'div'
  $div.stop()
  $div.width fromNum
  $div.animate {width: toNum},
    duration: 300
    step: (now) ->
      $price.text numToPrice now


$body.on 'click', '.js-collapse', (e) ->
  e.preventDefault()
  id = $(this).attr 'href'
  toggleCollapse id
  off



$('.js-slider').each (i, slider) ->
  $slider = $ slider
  $items = $slider.find '.slide'
  $items.each (ii, item) ->
    $item = $ item
    $img = $item.find '.slide-img'
    $slideDesc = $item.find '.slide-desc'
    $slideDesc.css 'background-image', "url('#{$img.attr('src')}')"
  $slider.bxSlider
    adaptiveHeight: on
    controls: off
    wrapperClass: 'bx-wrapper slide-wrapper'
    auto: on
    autoHover: on
    pause: 8000



$('.js-gslider').each (i, gslider) -> new GalSlider $ gslider



$('.js-mask').each (i, input) ->
  $input = $ input
  $input.inputmask $input.attr('mask'), clearIncomplete: on, showMaskOnHover: off



$win.on 'scroll', (e) ->
  offset = 300
  scrollTopNum = $(this).scrollTop()
  $onscrl.addClass 'hide' if scrollTopNum > offset
  $onscrl.removeClass 'hide' if scrollTopNum < offset



$('.js-fancybox').fancybox()


doStrFun = (funName, arg) ->
  fun = switch funName
    when 'showCalcItem' then showCalcItem
    else () ->
  fun? arg


addOneScrollToEvent = () -> $body.one 'click', '.js-scrollto', scrollToClick

scrollToClick = (e) ->
  e.preventDefault()
  e.stopPropagation()
  e.stopImmediatePropagation()
  $this = $ this
  thisHref = $this.attr 'href'
  callback = $this.getValJSON null, null, 'callback'
  if thisHref is '#'
    scrollTo '#', () -> doStrFun callback.name, callback.arg if callback?
    addOneScrollToEvent()
    return off
  thisHrefArr = thisHref.split '#'
  if thisHrefArr.length < 2
    addOneScrollToEvent()
    return off
  thisPath = thisHrefArr[0]
  thisHash = thisHrefArr[1]
  if thisPath and thisHash and not location.href.includes "#{thisPath}"
    localStorage.setItem 'scrollTo', "##{thisHash}"
    localStorage.setItem 'scrollCallback', JSON.stringify callback if callback?
    location.href = "#{thisPath}"
    return on
  if thisHash
    scrollTo "##{thisHash}", () -> doStrFun callback.name, callback.arg if callback?
    addOneScrollToEvent()
    return off
  off

addOneScrollToEvent()

scrollToId = localStorage.getItem 'scrollTo'
scrollCallback = localStorage.getItem 'scrollCallback'

if scrollToId?
  scrollTo String(scrollToId), 600, () ->
    localStorage.removeItem 'scrollTo'
    if scrollCallback?
      callback = JSON.parse String scrollCallback
      doStrFun callback.name, callback.arg
      localStorage.removeItem 'scrollCallback'





# START КАЛЬКУЛЯТОР
# - - - - - - - - - - - - - - - - - - - - - - - - - -

# js-calc-item-1
$input1 = $ '#js-calc-input-1'
$input2 = $ '#js-calc-input-2'
$input3 = $ '#js-calc-input-3'
$input4 = $ '#js-calc-input-4'
$input5 = $ '#js-calc-input-5'
$input6 = $ '#js-calc-input-6'
$input7 = $ '#js-calc-input-7'
$input8 = $ '#js-calc-input-8'
$viewItem1 = $ '#js-calc-item-1 .js-calc-item-total'

# js-calc-item-2
$input9 = $ '#js-calc-input-9'
$input10 = $ '#js-calc-input-10'
$viewItem2 = $ '#js-calc-item-2 .js-calc-item-total'

# js-calc-item-3
$input11 = $ '#js-calc-input-11'
$input12 = $ '#js-calc-input-12'
$input13 = $ '#js-calc-input-13'
$input14 = $ '#js-calc-input-14'
$input15 = $ '#js-calc-input-15'
$viewItem3 = $ '#js-calc-item-3 .js-calc-item-total'

# js-calc-item-4
$input16 = $ '#js-calc-input-16'
$input17 = $ '#js-calc-input-17'
$viewItem4 = $ '#js-calc-item-4 .js-calc-item-total'

# js-calc-item-5
$input18 = $ '#js-calc-input-18'
$input19 = $ '#js-calc-input-19'
$input20 = $ '#js-calc-input-20'
$input21 = $ '#js-calc-input-21'
$viewItem5 = $ '#js-calc-item-5 .js-calc-item-total'

# js-calc-item-6
$input22 = $ '#js-calc-input-22'
$input23 = $ '#js-calc-input-23'
$input24 = $ '#js-calc-input-24'
$input25 = $ '#js-calc-input-25'
$input26 = $ '#js-calc-input-26'
$viewItem6 = $ '#js-calc-item-6 .js-calc-item-total'

# js-calc-item-7
$input27 = $ '#js-calc-input-27'
$input28 = $ '#js-calc-input-28'
$input29 = $ '#js-calc-input-29'
$input30 = $ '#js-calc-input-30'
$input31 = $ '#js-calc-input-31'
$viewItem7 = $ '#js-calc-item-7 .js-calc-item-total'

# js-calc-item-8
$input32 = $ '#js-calc-input-32'
$viewItem8 = $ '#js-calc-item-8 .js-calc-item-total'

# js-calc-item-9
$input33 = $ '#js-calc-input-33'
$input34 = $ '#js-calc-input-34'
$viewItem9 = $ '#js-calc-item-9 .js-calc-item-total'

# js-calc-item-10
$input35 = $ '#js-calc-input-35'
$input36 = $ '#js-calc-input-36'
$input37 = $ '#js-calc-input-37'
$input38 = $ '#js-calc-input-38'
$input39 = $ '#js-calc-input-39'
$input40 = $ '#js-calc-input-40'
$input41 = $ '#js-calc-input-41'
# $input42 = $ '#js-calc-input-42'
$viewItem10 = $ '#js-calc-item-10 .js-calc-item-total'


$orderFix = $ '#order-fix'
$totalAll = $ '.js-total-all'
$ordermIlist = $ '#js-orderm-ilist'
$orderFormInputs = $ '#js-orderform-inputs'

getOverStr = (count, strArr) ->
  lastNum = Number String(count).slice -1
  switch
    when lastNum is 1 then strArr[0]
    when 1 < lastNum < 5 then strArr[1]
    else strArr[2]

orderIndex = 0
renderItemGetTotal = (calcFun, $itemView) ->
  data = do calcFun
  unless data
    $itemView.html ''
    return 0
  itemsHtml = '<p class="text">'
  orderInputs = """
    <input type="hidden" name="order[#{orderIndex}][label]" value="#{data.label}">
    <input type="hidden" name="order[#{orderIndex}][total]" value="#{data.total} руб.">
  """
  for item in data.items
    itemsHtml += "<span class=\"d-block mb-5 bi bi-check\">#{item}</span>"
    orderInputs += "<input type=\"hidden\" name=\"order[#{orderIndex}][items][]\" value=\"#{item}\">"
  itemsHtml += '</p>'
  html = """
    <div class="calc-itotal">
      <p class="text fwgt-700 d-flex justify-content-between">
        <span class="d-block">#{data.label}</span>
        <span class="d-block">#{data.total}<i class="i-20 em-8"></i></span>
      </p>
      #{itemsHtml}
    </div>
  """
  $itemView.html html
  modalHtml = """
    <div class="divider"></div>
    <p class="text text-right mb-10"><a class="js-rm-item" href="#{data.itemId}"><i class="i-29"></i></a></p>
    <p class="text d-flex justify-content-between align-items-end">
      <span class="d-block fwgt-600">#{data.label}</span>
      <span class="d-block fwgt-700 spnwr">#{data.total}<i class="i-20 em-8"></i></span>
    </p>
    #{itemsHtml}
  """
  $ordermIlist.append modalHtml
  $orderFormInputs.append orderInputs
  orderIndex += 1
  Number data.total


calculateItem1 = () ->
  atype = do $input1.getValJSON
  return no unless atype
  total = 0
  itemsArr = []
  priceIndex = Number atype.pi
  if priceIndex is 0
    $input2.find('option:not(:eq(0))').attr 'disabled', off
  else if priceIndex is 1
    $input2.find('option:eq(1)').attr 'disabled', 'disabled'
  else
    return no
  disk = do $input2.getValJSON
  count = do $input3.getValNum
  return no if not disk or not count
  valIndex = Number disk.i
  unIn = $input4.getValJSON valIndex
  monDe = $input5.getValJSON valIndex
  balance = $input6.getValJSON valIndex
  itemsArr.push "#{count} колес#{getOverStr count, ['о', 'а', '']}, R#{disk.r}"
  if unIn
    total += Number unIn.p[priceIndex]
    itemsArr.push String unIn.l
  if monDe
    total += Number monDe.p[priceIndex]
    itemsArr.push String monDe.l
  if balance
    total += Number balance.p[priceIndex]
    itemsArr.push String balance.l
  return no unless total
  total += total * 0.5 if unIn and not monDe and not balance
  total += total * 0.5 if do $input7.isChecked
  total += total * 0.5 if do $input8.isChecked
  total = total * count
  return
    label: 'Авто шиномонтаж'
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-1'


calculateItem2 = () ->
  diskType = do $input9.getValJSON
  disk = do $input10.getValJSON
  return no unless diskType
  pindex = Number diskType.pi
  if pindex is 0
    $input10.find('option:eq(5)').css('display','none').attr 'disabled', 'disabled'
    $input10.find('option:eq(6)').css('display','none').attr 'disabled', 'disabled'
    $input10.find('option:eq(7)').css('display','none').attr 'disabled', 'disabled'
    $input10.find('option:eq(8)').css('display','none').attr 'disabled', 'disabled'
    $input10.find('option:eq(9)').css('display','none').attr 'disabled', 'disabled'
    $input10.find('option:eq(10)').css('display','none').attr 'disabled', 'disabled'
  else
    $input10.find('option:not(:eq(0))').css('display','block').attr 'disabled', off
  price = 0
  price = Number disk.p[pindex] if disk
  return no unless price
  return
    label: 'Ремонт литых дисков'
    total: Math.round price
    items: ["#{diskType.label}, R#{disk.r}"]
    itemId: '#js-calc-item-2'


calculateItem3 = () ->
  price = 0
  itemsArr = []
  if do $input11.isChecked
    val = do $input11.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  if do $input12.isChecked
    val = do $input12.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  if do $input13.isChecked
    val = do $input13.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  if do $input14.isChecked
    val = do $input14.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  if do $input15.isChecked
    val = do $input15.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  return no if price is 0
  return
    label: "Ремонт проколов"
    total: Math.round price
    items: itemsArr
    itemId: '#js-calc-item-3'


calculateItem4 = () ->
  price = 0
  itemsArr = []
  if do $input16.isChecked
    val = do $input16.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  if do $input17.isChecked
    val = do $input17.getValJSON
    itemsArr.push String val.label
    price = price + Number val.p
  return no if price is 0
  return
    label: "Аргонная сварка (см)"
    total: Math.round price
    items: itemsArr
    itemId: '#js-calc-item-4'


calculateItem5 = () ->
  disk = do $input18.getValJSON
  count = do $input19.getValNum

  return no if not disk or not count
  diskPrice = Number disk.p
  total = diskPrice * count
  itemsArr = ["#{count} диск#{getOverStr count, ['', 'а', 'ов']}, R#{disk.label}"]
  if do $input20.isChecked
    itemsArr.push do $input20.getValStr
    total = total + (total * 0.2)
  if do $input21.isChecked
    itemsArr.push do $input21.getValStr
    total = total * 2
  return
    label: 'Порошковая покраска дисков'
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-5'


calculateItem6 = () ->
  disk = do $input22.getValJSON
  return no unless disk
  total = 0
  itemsArr = ["Колесо, R#{disk.r}"]
  if do $input23.isChecked
    val = do $input23.getValJSON
    itemsArr.push String val.label
    total = total + Number val.p
  if do $input24.isChecked
    val = do $input24.getValJSON
    itemsArr.push String val.label
    total = total + Number val.p
  if do $input25.isChecked
    val = do $input25.getValJSON
    itemsArr.push String val.label
    total = total + Number val.p
  if do $input26.isChecked
    val = do $input26.getValJSON
    itemsArr.push String val.label
    total = total + Number val.p
  return no if total is 0
  return
    label: 'Мото шиномонтаж'
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-6'


calculateItem7 = () ->
  total = 0
  itemsArr = []
  if do $input27.isChecked
    val = do $input27.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input28.isChecked
    val = do $input28.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input29.isChecked
    val = do $input29.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input30.isChecked
    val = do $input30.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input31.isChecked
    val = do $input31.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  return no if total is 0
  return
    label: "Ремонт автостекла"
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-7'


calculateItem8 = () ->
  total = 0
  itemsArr = []
  if do $input32.isChecked
    val = do $input32.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  return no if total is 0
  return
    label: "Для всех авто"
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-8'


calculateItem9 = () ->
  total = 0
  itemsArr = []
  if do $input33.isChecked
    val = do $input33.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input34.isChecked
    val = do $input34.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  return no if total is 0
  return
    label: "Хранение шин и дисков"
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-9'


calculateItem10 = () ->
  total = 0
  itemsArr = []
  if do $input35.isChecked
    val = do $input35.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input36.isChecked
    val = do $input36.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input37.isChecked
    val = do $input37.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input38.isChecked
    val = do $input38.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input39.isChecked
    val = do $input39.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input40.isChecked
    val = do $input40.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  if do $input41.isChecked
    val = do $input41.getValJSON
    itemsArr.push String val.l
    total = total + Number val.p
  # if do $input42.isChecked
  #   val = do $input42.getValJSON
  #   itemsArr.push String val.l
  #   total = total + Number val.p
  return no if total is 0
  return
    label: "Доп услуги"
    total: Math.round total
    items: itemsArr
    itemId: '#js-calc-item-10'


calculate = () ->
  $ordermIlist.html ''
  $orderFormInputs.html ''
  orderIndex = 0
  totalAll = 0
  totalAll += renderItemGetTotal calculateItem1, $viewItem1
  totalAll += renderItemGetTotal calculateItem2, $viewItem2
  totalAll += renderItemGetTotal calculateItem3, $viewItem3
  totalAll += renderItemGetTotal calculateItem4, $viewItem4
  totalAll += renderItemGetTotal calculateItem5, $viewItem5
  totalAll += renderItemGetTotal calculateItem6, $viewItem6
  totalAll += renderItemGetTotal calculateItem7, $viewItem7
  totalAll += renderItemGetTotal calculateItem8, $viewItem8
  totalAll += renderItemGetTotal calculateItem9, $viewItem9
  totalAll += renderItemGetTotal calculateItem10, $viewItem10

  if totalAll
    $orderFix.collapse no
    animatePriceTo $totalAll, totalAll
  else
    $orderFix.collapse yes
    $totalAll.text ''
    $.fancybox.close yes
  on

# $.fancybox.open $ '#order-modal'

# $.fancybox.open $ '#js-form-success'

# $.fancybox.open $ '#js-form-error'

$body.on 'change', '.js-calc-input', (e) -> do calculate

$body.on 'click', '.js-rm-item', (e) ->
  do e.preventDefault
  $item = $ $(this).attr 'href'
  $item.find('.js-calc-input').each (i, input) ->
    $input = $ input
    tagName = do $input.tagNameLower
    type = $input.attr 'type'
    if tagName is 'select'
      $input.val $input.find('option:first').val()
    if tagName is 'input' and type is 'checkbox' or type is 'radio'
      $input.prop 'checked', off
    on
  do calculate
    # if tagName is 'input' and type is 'radio'
    #   $input.attr 'checked', off
    # if tagName is 'input' and type is 'text'
    
  off

# - - - - - - - - - - - - - - - - - - - - - - - - - -
# END КАЛЬКУЛЯТОР

$body.on 'click', '.js-calc-btn', (e) ->
  e.preventDefault()
  $this = $ this
  showCalcItem $this.attr('href')
  off


loaderImg = new Image
loaderImg.src = 'img/loader.svg' if loaderImg


jsFormOpt =
  sendingStr: '<img height="10" src="img/loader.svg">'
  action: '/send.php'
  success: ($form, data) ->
    $form.trigger 'reset'
    $.fancybox.close(on)
    $.fancybox.open $ '#js-form-success'
    on
  error: ($form) ->
    $.fancybox.close(on)
    $.fancybox.open $ '#js-form-error'
    on

new jQueryMailer '.js-form', jsFormOpt

