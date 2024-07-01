document.addEventListener('DOMContentLoaded', function() {
    const products = [
        { 
            id: 1, 
            name: "ROG Zephyrus G16 (2024) GU605MY-QR118X", 
            price: "Rp 50000000", 
            generalDescription: "", 
            features: ["Intel Core Ultra 9-185H", "NVIDIA® GeForce RTX™ 4080 Laptop GPU", "16GB*2 LPDDR5X 6400 on board support dual channel", "2TB PCIe® 4.0 NVMe™ M.2 Performance SSD", "Nebula OLED-QHD240Hz", "Windows 11 Home"],
            image: "../img/h732.png" 
        },
        { 
            id: 2, 
            name: "ROG Strix GeForce RTX™ 4080 SUPER 16GB GDDR6X OC Edition", 
            price: "Rp 23000000", 
            generalDescription: "", 
            features: ["Powered by NVIDIA DLSS3: ultra-efficient Ada Lovelace arch, and full ray tracing", "4th Generation Tensor Cores: Up to 4x performance with DLSS 3 vs. brute-force rendering ", "3rd Generation RT Cores: Up to 2X ray tracing performance ", "OC mode:2670 MHz (OC mode)/ 2640 MHz (Default mode) ", "Axial-tech fans scaled up for 23% more airflow", "New patented vapor chamber with milled heatspreader for lower GPU temps", "3.5-slot design: massive fin array optimized for airflow from the three Axial-tech fans", "Diecast shroud, frame, and backplate add rigidity and are vented to further maximize airflow and heat dissipation", "Digital power control with high-current power stages and 15K capacitors to fuel maximum performance", "Auto-Extreme precision", "GPU Tweak III software"],
            image: "../img/4090.png"
        },
        { 
            id: 3, 
            name: "Intel Core i9 Processor 12th Generation Special Edition", 
            price: "Rp 14000000", 
            generalDescription: "", 
            features: ["Up to 5.5 GHz max turbo frequency", "Intel Thermal Velocity Boost", "Intel Adaptive Boost Technology", "16 cores (eight P-cores and eight E-cores)", "24 threads", "150 W processor base power", "30MB Intel Smart Cache", "PCIe Gen 5.0 and 4.0 support", "Up to DDR5 4800 MT/s and DDR4 3200 MT/s support"],
            image: "../img/Intel-core-i9-12900ks-cpu-launched-ss-1.webp"
        }
    ];

    // Handle product description page
    const productDescriptionPage = document.querySelector('.product-description');
    if (productDescriptionPage) {
        const params = new URLSearchParams(window.location.search);
        const productId = parseInt(params.get('id'), 10);
        const product = products.find(p => p.id === productId);

        if (product) {
            document.getElementById('product-name').textContent = product.name;
            document.getElementById('product-price').textContent = product.price;

            const descriptionContainer = document.getElementById('product-description');

            // Create and append the image
            const img = document.createElement('img');
            img.src = product.image;
            img.alt = product.name;
            descriptionContainer.appendChild(img);

            // Create and append the general description
            const p = document.createElement('p');
            p.textContent = product.generalDescription;
            descriptionContainer.appendChild(p);

            // Create and append the list of features
            const ul = document.createElement('ul');
            product.features.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                ul.appendChild(li);
            });
            descriptionContainer.appendChild(ul);

            document.getElementById('buy-button').href = `payment.html?id=${product.id}&name=${product.name}&price=${product.price.replace('Rp', '')}`;
        }
    }
});
