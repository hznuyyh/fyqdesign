<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
<div style="background-color:#00BBFF;height:42px;padding: 5px;"> 
        <a href="user.html"><img src="images/arrow.png" class="img-responsive" width="25" height="25"></a>
        <h4 class="text-center" style="color:white;margin-top: -18px">问卷调查</h4>
      </div>
<div>
   <form name="from1" id="form1" action="test.do" style="margin-top:0px;margin-left: 15px;">
          <div>   
            <label>1.您是疾病初期，且疾病来时凶猛吗？</label> <br> 
            <input check type="radio" name="first"  value=1/><label>是(跳至2）</label>  
            <input name="first" checked type="radio"  value=2/><label>否（跳至3）</label>
            <br>  
           </div>
           <div>
            <label>2.您的症状表现是A口渴多饮，甚则渴饮无度，咽干舌燥B多食，消谷善饥，或胃脘嘈杂，形体消瘦C小便频数色黄，大便秘结或干燥?</label> <br> 
            <input type="radio" name="second"  value='A'/><label>A(您的中医分类为糖尿病中的阴虚燥热型中的上消)</label> <br> 
            <input name="second" checked type="radio"  value='C'/><label>B(您的中医分类为糖尿病中的阴虚燥热型中的中消)</label> <br>
            <input name="second" checked type="radio" value='C'/><label>C(您的中医分类为糖尿病中的阴虚燥热型中的下消)</label>   
            <br> 
            </div> 
            <div>
             <label>3.您有出现多饮多尿多食的明显症状吗？</label> <br> 
            <input type="radio" name="third" value='t1'/><label>是(跳至4)</label> 
            <input name="third" checked type="radio" value="t2"/><label>否(您可能未患糖尿病)</label>   
            <br> 
            </div>
            <div>
            <label>4.您常伴有体卷乏力，举步维艰等脾气虚弱等症状吗？
</label>  <br> 
            <input type="radio" name="four" value='f1'/><label>是(您的中医分类为脾气虚弱型)</label> 
            <input name="four" checked type="radio" value="f2"/><label>否(跳至5)</label>   
            <br>
            </div>  
            <div>
            <label>5.您是否常伴有心慌气短，头晕耳鸣，失眠多梦或心悸健忘，自汗盗汗，五心烦热，或骨蒸潮热，形体消瘦，唇红咽干，尿频色黄，大便干。</label>  <br> 
            <input type="radio" name="five" value='f3'/><label>是(您的中医分类为气阴两虚症)</label> 
            <input name="five" checked type="radio" value="f4"/><label>否(跳至6)</label>   
            <br> 
            </div>
             <div>
            <label>6.您是否经过糖尿病治疗？</label>  <br> 
            <input type="radio" name="six" value='s1'/><label>是(跳至7）</label> 
            <input name="six" checked type="radio" value="s2"/><label>否(跳至8)</label>   
            <br> 
            </div>
            <div>
            <label>7.经过治疗三消不减，形体日渐消瘦，出现合并心脑血管及神经病变，三多症状轻重不一，伴胸闷胸痛、刺痛，或上下肢疼痛，或肢体麻木，半身不遂，面有瘀斑，月经血块多色紫。舌紫暗或淡暗，有瘀点、瘀斑，舌下静脉怒张，脉来细涩</label> <br>  
            <input type="radio" name="seven" value='se1'/><label>是(您的中医分类为瘀血内阻型)</label>
            <input name="seven" checked type="radio" value="se2"/><label>否(您可能未患病)</label> 
            <br>
            </div>
            <div>
            <label>8.三多症状轻重不一，伴胸闷胸痛、刺痛，或上下肢疼痛，或肢体麻木，半身不遂，面有瘀斑，月经血块多色紫。舌紫暗或淡暗，有瘀点、瘀斑，舌下静脉怒张，脉来细涩</label> <br>  
            <input type="radio" name="eight" value='e1'/><label>是(您的中医分类为瘀血内阻型)</label>
            <input name="eight" checked type="radio" value="e2"/><label>否(您可能未患病)</label>  
            <br>
            </div>
        </form>  
</div>
      <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script type="text/javascript" src="js/flexible.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/navbarscroll.js"></script>
    
 </body>
</html>