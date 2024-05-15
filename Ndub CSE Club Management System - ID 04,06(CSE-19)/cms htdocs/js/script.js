// You can add JavaScript code here for interactivity

// Example: Display a confirmation dialog before deleting a member
document.querySelectorAll('.delete-member').forEach(item => {
  item.addEventListener('click', event => {
      if (!confirm("Are you sure you want to delete this member?")) {
          event.preventDefault(); // Prevent the default action (e.g., following the link)
      }
  });
});

// Example: Toggle visibility of a section
document.querySelector('#toggle-section').addEventListener('click', () => {
  const section = document.querySelector('#section-to-toggle');
  section.classList.toggle('hidden');
});
