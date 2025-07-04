<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="dropdown-item">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
    </button>
</form>
