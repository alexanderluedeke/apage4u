 // Parses returned response and extracts
    // the title, links, and text of each news story.
    function yahoo_news(o){
      var items = o.query.results.item;
      var output = '';
      var no_items=items.length;
      for(var i=0;i<no_items;i++){
        var title = items[i].title;
        var link = items[i].link;
        var desc = items[i].description;
        output += "<div><h3><a href='" + link + "'>"+title+"</a></h3>" + desc + "</div>";
      }
      // Place news stories in div tag
      document.getElementById('results').innerHTML = output;  
    }