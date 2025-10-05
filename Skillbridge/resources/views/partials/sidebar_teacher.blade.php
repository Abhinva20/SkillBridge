<a href="{{ route('teacher.dashboard') }}" class="{{ Route::currentRouteName() == 'teacher.dashboard' ? 'fw-bold text-primary' : '' }}">Dashboard</a>
<a href="#" class="{{ Route::currentRouteName() == 'my.classes' ? 'fw-bold text-primary' : '' }}">My Classes</a>
<a href="#" class="{{ Route::currentRouteName() == 'students' ? 'fw-bold text-primary' : '' }}">Students</a>
<a href="#" class="{{ Route::currentRouteName() == 'materials' ? 'fw-bold text-primary' : '' }}">Materials</a>
<a href="#" class="{{ Route::currentRouteName() == 'earnings' ? 'fw-bold text-primary' : '' }}">Earnings</a>
