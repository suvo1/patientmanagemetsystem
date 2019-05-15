<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="http://127.0.0.1:8000/">
                    <img src="{{asset('assets/frontend/img/logo.png')}}" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="http://127.0.0.1:8000/">Home</a></li>
				<li><a href="{{ route('about.display') }}">Service</a></li>
				<li><a href="{{ route('doctors.display') }}">Doctors</a></li>
				<li><a href="{{ route('features.display') }}">Facilities</a></li>
				
        <li><a href="{{ route('department.display') }}">Department</a></li>
        <li><a href="{{ route('contact.display') }}">Contact</a></li>
        <li><a href="http://127.0.0.1:8000/login" class="btn btn-skin btn-lg">Sign In</a>	</li>
        <li><a href="http://127.0.0.1:8000/register" class="btn btn-skin btn-lg">Sign Up</a>	</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>