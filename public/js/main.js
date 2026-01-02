
document.addEventListener("DOMContentLoaded", () => {
  const scrollWrapper = document.querySelector('.scrollWrapper');
  const items = [...scrollWrapper.children];

  // Clone each item once to create the continuous scroll illusion
  items.forEach((item) => {
    const clonedItem = item.cloneNode(true);
    scrollWrapper.appendChild(clonedItem);
  });
});

document.addEventListener('DOMContentLoaded', () => {
    const stats = document.querySelectorAll('.stat-number');

    const animateNumbers = () => {
        stats.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-target'));
            const duration = 2000; // Total time in milliseconds (2 seconds)
            const frameRate = 1000 / 60; // 60 frames per second
            const totalFrames = Math.round(duration / frameRate);
            let currentFrame = 0;

            const count = () => {
                currentFrame++;
                const progress = currentFrame / totalFrames;
                // Use an "easeOut" formula so it slows down at the end
                const currentNumber = Math.round(target * (1 - Math.pow(1 - progress, 3)));

                if (currentFrame <= totalFrames) {
                    stat.innerText = currentNumber.toLocaleString();
                    requestAnimationFrame(count);
                } else {
                    stat.innerText = target.toLocaleString();
                }
            };

            count();
        });
    };

    // Intersection Observer to trigger when visible
    const observerOptions = {
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateNumbers();
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // This targets the specific numbers to watch them
    stats.forEach(stat => observer.observe(stat));
});
