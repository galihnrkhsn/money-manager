<nav class="bg-blue-500 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <span>Money Manager</span>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
        </form>
    </div>
</nav>
