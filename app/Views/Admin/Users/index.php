<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Users<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section >  <div class="form">
    <h1>Users</h1>
    
    <button class="btn btn-primary">  <a class="mbutton"  href="<?= site_url("/admin/users/new") ?>">New user</a></button>
    
    <?php if ($users): ?>
    
        <table>
            <thead>
                <tr>
                    <th class="fhead">Name</th>
                    <th class="fhead">email</th>
                    <th class="fhead">Active</th>
                    <th class="fhead">Administrator</th>
                    <th style="width: 400px;"> Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                
                    <tr >
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? 'yes' : 'no' ?></td>
                        <td><?= $user->is_admin ? 'yes' : 'no' ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $pager->Links() ?>
        
    <?php else: ?>
        
        <p>No users found.</p>
        
    <?php endif; ?></div>
    </section>
<?= $this->endSection() ?>








