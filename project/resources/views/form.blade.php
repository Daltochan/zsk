<form method="POST" action="/submit-form">
    @csrf <!-- Token CSRF -->
    
    <div>
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name">
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <!-- Dodaj inne pola formularza -->
    
    <button type="submit">Wyślij</button>
</form>

@if ($errors->any())
    <div class="error-messages">
        <p>Lista błędów:</p>
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
@endif
