
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(45deg, #1a1a1a, #e3342f);
        color: white;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;

    }
    .navbar {
        width: 100%;
        background-color: #007bff;
        padding: 15px 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;

        .nav-links {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            align-items: center;
        }
    }
</style>
<nav class="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between w-full">
        <div class="logo">
            <a href="/" class="text-xl font-semibold text-gray-900">Laravel ASIX</a>
        </div>
        <div class="nav-links">
            <a href="{{ route('books.index') }}" class="nav-item">Home</a>
            <a href="/books" class="nav-item">Books</a>
            <a href="/knifes" class="nav-item">Cuchillos</a>
        </div>
    </div>
</nav>

