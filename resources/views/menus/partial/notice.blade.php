<div class="container-fluid">
    <div class="alert alert-info">
        <strong>使用指南:</strong>
        <p>You can output {{ !empty($menu) ? 'this' : 'a' }} menu anywhere on your site by calling <code>menu('{{ !empty($menu) ? $menu->name : 'name' }}')</code></p>
    </div>
</div>