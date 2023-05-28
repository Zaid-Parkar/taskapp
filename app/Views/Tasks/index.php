<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section>
    <div class="form" style="width:30%; margin: 2%;">
    <h1>Tasks</h1>
    
    <button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url("/tasks/new") ?>">New task</a></button>

    <div>
        <label for="query">Search</label>
        <input name="query" id="query">
    </div>

    <?php if ($tasks): ?>
    
        <ul>
            <?php foreach($tasks as $task): ?>
            
                <li>
                    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                        <?= esc($task->description) ?>
                    </a>
                </li>
                
            <?php endforeach; ?>
        </ul>

        <?= $pager->Links() ?>
        
    <?php else: ?>
        
        <p>No tasks found.</p>
        
    <?php endif; ?>
    </div>
</section>
    <script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>
    
    <script>
        var searchUrl = "<?= site_url('/tasks/search?q=') ?>";
        var showUrl = "<?= site_url('/tasks/show/') ?>";
        var data;
        var i;
                
        var searchAutoComplete = new autoComplete({
            selector: 'input[name="query"]',
            cache: false,
            source: function(term, response) {

                var request = new XMLHttpRequest();

                request.open('GET', searchUrl + term, true);

                request.onload = function() {
                    
                    data = JSON.parse(this.response);

                    i = 0;

                    var suggestions = data.map(task => task.description);
                    
                    response(suggestions);
                };

                request.send();                
            },
            renderItem: function (item, search) {
                
                var id = data[i].id;
                
                i++;
                
                return '<div class="autocomplete-suggestion" data-id="' + id + '">' + item + '</div>';
            },
            onSelect: function(e, term, item){
                
                window.location.href = showUrl + item.getAttribute('data-id');
                
            }
        });
        
    </script>
    
<?= $this->endSection() ?>















