INSERT INTO
    recommendations (
        category_id,
        tipe_spesifikasi,
        spesifikasi,
        link,
        image,
        price
    )
VALUES
    -- Kategori ID = 1 (Prosesor)
    -- Prosesor High Spec
    (
        1,
        'high',
        'Intel Core i9-13900K, 24 Core, 32 Thread, 3.0 GHz Base, Turbo Boost up to 5.8 GHz',
        'https://www.intel.com/content/www/us/en/products/sku/12345/intel-core-i913900k.html',
        'https://example.com/image_i9_13900k.jpg',
        7990000
    ),
    -- Prosesor Mid Spec
    (
        1,
        'mid',
        'AMD Ryzen 7 7700X, 8 Core, 16 Thread, 4.5 GHz Base, Turbo Boost up to 5.4 GHz',
        'https://www.amd.com/en/products/cpu/amd-ryzen-7-7700x',
        'https://example.com/image_ryzen_7700x.jpg',
        4500000
    ),
    -- Prosesor Low Spec
    (
        1,
        'low',
        'Intel Core i5-13600K, 14 Core, 20 Thread, 3.5 GHz Base, Turbo Boost up to 5.1 GHz',
        'https://www.intel.com/content/www/us/en/products/sku/12344/intel-core-i513600k.html',
        'https://example.com/image_i5_13600k.jpg',
        3200000
    ),
    -- Kategori ID = 2 (Kartu Grafis)
    -- Kartu Grafis High Spec
    (
        2,
        'high',
        'NVIDIA GeForce RTX 4090, 24GB GDDR6X, 16384 CUDA Cores, Base Clock 2.23 GHz',
        'https://www.nvidia.com/en-us/geforce/graphics-cards/rtx-4090/',
        'https://example.com/image_rtx4090.jpg',
        22000000
    ),
    -- Kartu Grafis Mid Spec
    (
        2,
        'mid',
        'AMD Radeon RX 7800 XT, 16GB GDDR6, 5120 Stream Processors, Base Clock 2.1 GHz',
        'https://www.amd.com/en/products/graphics/amd-radeon-rx-7800-xt',
        'https://example.com/image_rx7800xt.jpg',
        12000000
    ),
    -- Kartu Grafis Low Spec
    (
        2,
        'low',
        'NVIDIA GeForce GTX 1660 Ti, 6GB GDDR5, 1536 CUDA Cores, Base Clock 1.5 GHz',
        'https://www.nvidia.com/en-us/geforce/graphics-cards/gtx-1660-ti/',
        'https://example.com/image_gtx1660ti.jpg',
        5000000
    );