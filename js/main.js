$(document).ready(function(){

  var quoteArray = [
    {
    "quote": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iusto veniam maiores deleniti itaque, hic doloribus reiciendis esse unde. Ipsa aspernatur impedit vero quos numquam nesciunt alias, fugiat consequatur quod.",
    "author": "- Ben Grace"
    },
    {
      "quote": "Provident! A, recusandae ipsam! Sunt molestias ea ullam, sequi adipisci voluptate dicta rem vel amet pariatur nisi commodi, aspernatur excepturi.",
    "author": "- Jennifer Grace"
    },
    {"quote": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nihil repudiandae, quisquam molestiaplaceat.",
    "author": "- Lorry Grace"
    },
    {"quote": "Loremt. Ab quasi ea non incidunt amet fugit quam facere hic quia fuga id aperiam earum impedit vitae ratione, nulla dicta reiciendis aliquam.",
    "author": "- Jame Grace"
    }
  ];

  var changeQuote = function(){
    var q = _.sample(quoteArray);
    var quoteOfWeek = q.quote;
    var author = q.author;
    $('#qWeek').html(quoteOfWeek);
    $('#qAuthor').html(author);
  }

  var changePic = function(){
    $.ajax({
      dataType: "jsonp",
      url: 'http://ajax.googleapis.com/ajax/services/search/images',
      data: {
        v: "1.0",
        rsz: 8,
        imgsz: "large",
        q: "fruit"

      }
    }).done(function(json){
            var rand = Math.floor(Math.random() * json.responseData.results.length),
          results = json.responseData.results;
          var picOfWeek =  results[rand].url;
          $('#picWeek').attr("src", picOfWeek);
    });
  }

  var updateRightContent= function(){
    changeQuote();
    changePic();
  }



  updateRightContent();
  $('#quote').on('click', changeQuote);
  $('#picture').on('click', changePic);

});