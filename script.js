TweenMax.to('.giant-circle', 2, {
  y: 10,
  yoyo: true,
  repeat: -1,
  ease: Power0.easeInOut
})

function animate(el) {
  var tl = new TimelineMax();
  
  var t = 0.1;
  
  var svg = $(el).find('svg')
  var start = $(el).find('.flashy-start')[0]
  var middle = $(el).find('.flashy-middle')[0]
  var end = $(el).find('.flashy-end')[0]
  var stroke = $(el).find('rect.flashy-stroke')[0]
  
  tl
  .set(svg, {
    visibility: 'visible'
  })
  .add('start')
  .to(start, t, {
    morphSVG: middle
  }, 'start')
  .to(start, t*1.5, {
    morphSVG: end
  })
  .fromTo(stroke, t + t*1.5, {
    drawSVG: '0% 100%'
  }, {
    drawSVG: '50% 50%'
  }, 'start')
  .set(svg, {
    visibility: 'hidden'
  })
  .set(start, {
    morphSVG: start
  })

  return tl;
}


function addflashy(el){
  var flashColor = $(el).css('color')
  var flashSVG = '<svg class="flashy" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" preserveAspectRatio="none"><polygon class="flashy-start" fill="#FFFFFF" points="14.29,513 -80.195,513 1.129,-12 95.615,-12 "/><polygon style="visibility: hidden;" class="flashy-end" fill="#FFFFFF" points="499.192,513 404.708,513 486.033,-12 580.519,-12 "/><polygon style="visibility: hidden;" class="flashy-middle" fill="#FFFFFF" points="403.43,513 14.305,513 95.629,-12 484.755,-12 "/><rect class="flashy-stroke" fill="none" stroke="#FFFFFF" stroke-width="15" stroke-miterlimit="10" width="500" height="500"/></svg>'
  
  $(el).append(flashSVG)
  
  $(el).find('polygon').attr('fill', flashColor)
  $(el).find('rect').attr('stroke', flashColor)
}

$(document).ready( function(){
  var elems = $('[data-rel="add-flash"]')
  elems.each(function(){
    addflashy(this)
    $(this).mouseenter(function(){ animate(this) })
  })
  
  var timer = setInterval(function(){
    animate('.giant-circle');
  }, 2000)
})