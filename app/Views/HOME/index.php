<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>

<section>
    <div style="margin: 2%;">
    <h1>TaskApp: A Simple To-Do App Built With CodeIgniter</h1>
  <p>TaskApp is a simple to-do app that allows users to create, view, and manage their tasks. It is built using CodeIgniter, a PHP framework.</p>
  <h2>Features:</h2>
  <ul>
    <li>Users can create tasks.</li>
    <li>Users can view a list of all their tasks.</li>
    <li>Users can mark tasks as complete.</li>
    <li>Users can delete tasks.</li>
  </ul>
 
  <h2>Admin Side:</h2>
  <p>The admin side of the TaskApp allows users to manage all of the tasks in the system. This includes creating new tasks, editing existing tasks, and deleting tasks.</p>
  <p>The admin side also allows users to view reports on task activity. This information can be used to track the progress of tasks and identify areas where improvement is needed.</p>
  <h2>User Side:</h2>
  <p>The user side of the TaskApp is designed to be simple and easy to use. Users can quickly and easily create new tasks, view a list of all their tasks, and mark tasks as complete.</p>
  <p>The TaskApp also provides users with the ability to set due dates for tasks and to add notes to tasks. This information can be used to help users stay organized and on track.</p>
  <h2>Conclusion:</h2>
  <p>TaskApp is a simple to-use to-do app that is built with CodeIgniter. It is a good example of how to use CodeIgniter to build a simple web application. The TaskApp has both an admin side and a user side, and it provides users with the ability to create, view, manage, and track their tasks.</p>
    </div>
</section>

    

<?= $this->endSection() ?>