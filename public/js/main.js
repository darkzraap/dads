
document.addEventListener("DOMContentLoaded", () => {
  const scrollWrapper = document.querySelector('.scrollWrapper');
  const items = [...scrollWrapper.children];

  // Clone each item once to create the continuous scroll illusion
  items.forEach((item) => {
    const clonedItem = item.cloneNode(true);
    scrollWrapper.appendChild(clonedItem);
  });
});
