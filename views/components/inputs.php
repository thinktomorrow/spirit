<section class="stack-l forms" id="forms">
  <h1>Form elements</h1>
  <hr>

  <h2>Input fields</h2>
  <div class="input-group stack" id="clone-12">
    <label for="text">Text Input</label>
    <input id="text" class="input inset-s" placeholder="Text input" type="text" required>
    <small class="caption">Note about this field</small>
  </div>
  <div class="input-group stack valid">
    <label for="text">Valid Input</label>
    <input id="text" class="input inset-s" placeholder="Text input" type="text" required>
    <small class="caption">Note about this field</small>
  </div>
  <div class="input-group stack error">
    <label for="text">Error input</label>
    <input id="text" class="input inset-s" placeholder="Text input" type="text" required>
    <small class="caption">Note about this field</small>
  </div>
  <pre class="row code-box" id="code-12"></pre>

  <h2>Prepend with icons</h2>
  <div class="input-group stack" id="clone-13">
    <label for="text">Text Input</label>
    <div class="input-group-prefix">
      <span class="input-prefix"><i class="icon icon-envelope-o"></i></span>
      <input id="text" class="input inset-s" placeholder="Text input" type="email" required>
    </div>
    <small class="caption">Note about this field</small>
  </div>
  <div class="input-group stack valid">
    <label for="text">Valid Text Input</label>
    <div class="input-group-prefix ">
      <span class="input-prefix"><i class="icon icon-envelope-o"></i></span>
      <input id="text" class="input inset-s" placeholder="Text input" type="email" required>
    </div>
    <small class="caption">Note about this field</small>
  </div>
  <div class="input-group stack error">
    <label for="text">Error Text Input</label>
    <div class="input-group-prefix">
      <span class="input-prefix"><i class="icon icon-envelope-o"></i></span>
      <input id="text" class="input inset-s" placeholder="Text input" type="email" required>
    </div>
    <small class="caption">Note about this field</small>
  </div>
  <pre class="row code-box" id="code-13"></pre>


  <h2>Other Form Elements</h2>
  <div class="input-group stack">
    <label for="password">Password</label>
    <input id="password" class="input inset-s" placeholder="*****" type="password" required>
  </div>
  <div class="input-group stack">
    <label for="number">Number</label>
    <input id="number" class="input inset-s" placeholder="---- / -- . -- . --" type="phone" required>
  </div>
  <div class="input-group stack">
    <label for="search">Search</label>
    <input id="search" class="input inset-s" placeholder="Search" type="search" required>
  </div>
  <div class="input-group stack">
    <label for="email">Email Address</label>
    <input id="email" class="input inset-s" type="email" placeholder="you@example.com" required>
  </div>
  <div class="input-group stack">
    <label for="email">Textarea</label>
    <textarea rows="8" cols="80" id="message" class="input inset-s" required></textarea>
  </div>

  <div class="input-group stack">
    <select>
      <option selected>Open this select menu</option>
      <option>Option 1</option>
      <option>Option 2</option>
    </select>
  </div>

  <div class="input-group stack">
    <label class="custom-file">
      <input type="file" id="file">
      <span class="custom-file-input"></span>
    </label>
  </div>
</section>