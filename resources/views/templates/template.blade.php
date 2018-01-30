
  <main role="main" class="inner cover">
    <h1 class="cover-heading">
    	
    	<a href="/templates/{{ $template->id }}">
    	
    		{{ $template->title }}
    	
    	</a>
    
    </h1>
    
       <p class="lead">{{ $template->created_at->toFormattedDateString()}} by <a href="#">Mark</a></p>
       
       {{$template->body}}
 </main>