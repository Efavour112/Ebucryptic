<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT Guide - Understanding Non-Fungible Tokens | EbuCryptic.net</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <body data-theme="light">
    <?php $currentPage = 'courses'; ?>

    <style>
        :root {
            --primary-color: #6f42c1;
            --secondary-color: #20c997;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
            line-height: 1.6;
        }
        
        
        .hero-section {
            padding: 100px 0;
            margin-bottom: 50px;
            border-radius: 0 0 30px 30px;
        }
        
        .section-title {
            /* position: relative; */
            margin-bottom: 30px;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--secondary-color);
            border-radius: 2px;
        }
        
        .car {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }
    
        .platform-car {
            border-left: 2px solid var(--primary-color);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .platform-logo {
            height: 40px;
            margin-right: 10px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #5a32a3;
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .nft-showcase {
            background-color: inherit;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border:1px solid pink;
        }
        
        .nft-image {
            border-radius: 10px;
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        
        .platform-badge {
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }
        
        .glow-text {
            text-shadow: 0 0 10px rgba(111, 66, 193, 0.5);
        }
        
        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            font-weight: bold;
            margin-right: 15px;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, #f093fb, #f5576c);
            color: white;
            padding: 25px;
            border-radius: 15px;
            margin: 30px 0;
        }
        .menu-container {
        background: linear-gradient(to right, #1e3c72, #2a5298); /* Blue gradient */
        padding: 10px;
        position: fixed;
        border-top:1px solid #fff;
        width:100%;
        }

        .menu-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        list-style: none;
        margin: 0;
        padding: 0;
        }

        .menu-list li a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: background 0.3s ease;
        }

        .menu-list li a:hover {
            background:pink;
            color: #fff; */
        }

    @media (max-width: 600px) {
        .menu-container {
        display: flex;
        font-size:10px;
        padding:10px 0px;
    } 
}
</style>
</head>
<body>
    <!-- Navigation -->
    <?php require "nav.php";?>
    
    <div class="menu-container">
        <ul class="menu-list">
            <li><a href="#what-is-nft">What is NFT?</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#platforms">Platforms</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 glow-text">Learn more about Digital tokens <br> NFTs</h1>
                    <p class="lead mb-4">Discover the world of Non-Fungible Tokens - unique digital assets revolutionizing art, collectibles, and ownership in the digital age.</p>
                    <a href="#what-is-nft" class="btn btn-light btn-lg mb-4">Learn More</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBDw3td7d_bJjD6UDPQjQnoWH5lN19xWuVYA&s" alt="NFT Art" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>

        </div>
    </section>

    <!-- What is NFT Section -->
    <section id="what-is-nft" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title d-inline-block">What Are NFTs?</h2>
                    <p class="lead">NFTs (Non-Fungible Tokens) are unique digital assets that represent ownership of a specific item or piece of content, stored on a blockchain.</p>
                </div>
            </div>
            
            <div class="row ">
                <div class="col-md-4 mb-4 ">
                    <div class="car h-100 text-center p-4">
                        <div class="feature-icon ">
                            <i class="bi bi-unlock-fill"></i>
                        </div>
                        <h4>Unique & Non-Interchangeable</h4>
                        <p>Each NFT has a unique identifier that distinguishes it from any other token, making it one-of-a-kind.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="car h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Indisputable Ownership</h4>
                        <p>Blockchain technology provides a transparent and immutable record of ownership and transaction history.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="car h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h4>Digital Scarcity</h4>
                        <p>NFTs create digital scarcity for items that can be easily copied, verifying the original and authentic version.</p>
                    </div>
                </div>
            </div>
            
            <div class="highlight-box mt-5">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3>NFT vs Cryptocurrency</h3>
                        <p>While cryptocurrencies like Bitcoin are fungible (each unit is the same as every other unit), NFTs are unique and cannot be exchanged on a one-to-one basis.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="bi bi-arrow-left-right" style="font-size: 3rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How NFTs Work -->
    <section id="how-it-works" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title d-inline-block">How Do NFTs Work?</h2>
                    <p class="lead">Understanding the technology and process behind creating, buying, and selling NFTs.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="nft-showcase">
                        <h4 class="mb-4">The NFT Creation Process</h4>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="step-number">1</div>
                            <div>
                                <h5>Create Digital Asset</h5>
                                <p>Artists create digital content like images, videos, music, or 3D models.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="step-number">2</div>
                            <div>
                                <h5>Mint the NFT</h5>
                                <p>The digital file is uploaded to an NFT platform and a token is created on a blockchain.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="step-number">3</div>
                            <div>
                                <h5>List for Sale</h5>
                                <p>The NFT is listed on a marketplace with a fixed price or put up for auction.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start">
                            <div class="step-number">4</div>
                            <div>
                                <h5>Transfer Ownership</h5>
                                <p>When purchased, ownership is transferred to the buyer and recorded on the blockchain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="nft-showcase">
                        <h4 class="mb-4">Popular NFT Use Cases</h4>
                        
                        <div class="row">
                            <div class="col-6 mb-3">
                                <img src="https://images.unsplash.com/photo-1541961017774-22349e4a1262?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Digital Art" class="nft-image">
                                <h6>Digital Art</h6>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://images.unsplash.com/photo-1626248801379-51a0748a5f96?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Collectibles" class="nft-image">
                                <h6>Collectibles</h6>
                            </div>
                            <div class="col-6 mb-3">
                                <img src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Virtual Real Estate" class="nft-image">
                                <h6>Virtual Real Estate</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NFT Platforms -->
    <section id="platforms" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title d-inline-block">Top NFT Platforms</h2>
                    <p class="lead">Discover the most popular marketplaces for creating, buying, and selling NFTs.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="car platform-car h-100">
                        <div class="car-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="data:image/png;base64,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" alt="OpenSea" class="platform-logo">
                                <h5 class="car-title mb-0">OpenSea</h5>
                            </div>
                            <p class="car-text">The largest NFT marketplace supporting multiple blockchains including Ethereum, Polygon, and Klaytn.</p>
                            <div class="mb-3">
                                <span class="platform-badge">Multi-chain</span>
                                <span class="platform-badge">User-friendly</span>
                            </div>
                            <a href="https://opensea.io" target="_blank" class="btn btn-outline-primary">Visit Platform</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="car platform-car h-100">
                        <div class="car-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="data:image/png;base64,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" alt="Rarible" class="platform-logo">
                                <h5 class="car-title mb-0">Rarible</h5>
                            </div>
                            <p class="car-text">Community-owned NFT marketplace with its own governance token (RARI) for platform decisions.</p>
                            <div class="mb-3">
                                <span class="platform-badge">Community-owned</span>
                                <span class="platform-badge">Governance token</span>
                            </div>
                            <a href="data:image/png;base64,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" target="_blank" class="btn btn-outline-primary">Visit Platform</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="car platform-car h-100">
                        <div class="car-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="data:image/png;base64,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" alt="SuperRare" class="platform-logo">
                                <h5 class="car-title mb-0">SuperRare</h5>
                            </div>
                            <p class="car-text">Curated NFT art marketplace focusing on single-edition digital artworks from top artists.</p>
                            <div class="mb-3">
                                <span class="platform-badge">Curated</span>
                                <span class="platform-badge">Single-edition</span>
                            </div>
                            <a href="https://superrare.com" target="_blank" class="btn btn-outline-primary">Visit Platform</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="car platform-car h-100">
                        <div class="car-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="data:image/png;base64,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" alt="Foundation" class="platform-logo">
                                <h5 class="car-title mb-0">Foundation</h5>
                            </div>
                            <p class="car-text">Invite-only platform where artists can mint NFTs and collectors can discover unique digital art.</p>
                            <div class="mb-3">
                                <span class="platform-badge">Invite-only</span>
                                <span class="platform-badge">Creative community</span>
                            </div>
                            <a href="https://foundation.app" target="_blank" class="btn btn-outline-primary">Visit Platform</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="car platform-car h-100">
                        <div class="car-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="data:image/png;base64,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" alt="Nifty Gateway" class="platform-logo">
                                <h5 class="car-title mb-0">Nifty Gateway</h5>
                            </div>
                            <p class="car-text">NFT marketplace owned by Gemini, known for high-profile drops from celebrities and top artists.</p>
                            <div class="mb-3">
                                <span class="platform-badge">Gemini-owned</span>
                                <span class="platform-badge">High-profile drops</span>
                            </div>
                            <a href="https://niftygateway.com" target="_blank" class="btn btn-outline-primary">Visit Platform</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="car platform-car h-100">
                        <div class="car-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReTbjAn3v0l_FF7ewJjH-UcZAfITbafZzhzP4q5vbaVipuPa-5Gr1Pv2wy8QwIGY3qa5w&usqp=CAU" alt="MakersPlace" class="platform-logo">         
                                <h5 class="car-title mb-0">MakersPlace</h5>
                            </div>
                            <p class="car-text">Digital art marketplace focused on helping creators authenticate and sell their digital creations.</p>
                            <div class="mb-3">
                                <span class="platform-badge">Creator-focused</span>
                                <span class="platform-badge">Authentication</span>
                            </div>
                            <a href="https://makersplace.com" target="_blank" class="btn btn-outline-primary">Visit Platform</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>
                    
                    <div class="faq-item">
                        <h5>What does "non-fungible" mean?</h5>
                        <p>Non-fungible means that something is unique and cannot be replaced with something else. For example, a dollar bill is fungible — you can trade one for another dollar bill and have exactly the same thing. A one-of-a-kind trading car, however, is non-fungible. If you traded it for a different car, you'd have something completely different.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h5>Do I own the copyright when I buy an NFT?</h5>
                        <p>Generally, no. When you buy an NFT, you own the token that represents the digital asset, but you typically don't own the copyright or intellectual property rights unless specifically transferred by the creator. The creator usually retains the copyright and can create more NFTs of the same work.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h5>Why are some NFTs so expensive?</h5>
                        <p>NFT prices are determined by market demand, perceived value, rarity, the creator's reputation, and utility. Some NFTs sell for millions because they're seen as digital collectibles, status symbols, or investments. The value is subjective, similar to traditional art markets.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h5>What blockchain do NFTs use?</h5>
                        <p>While Ethereum is the most common blockchain for NFTs, other blockchains like Solana, Flow, Tezos, and Polygon are also popular. Each has different characteristics like transaction speed, costs, and environmental impact.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h5>Are NFTs bad for the environment?</h5>
                        <p>This concern primarily applies to NFTs on blockchains that use Proof-of-Work consensus mechanisms (like Ethereum previously). However, many platforms are moving to more energy-efficient alternatives like Proof-of-Stake, and several NFT marketplaces now use eco-friendly blockchains or carbon offset programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require "footer.php";?>
</body>
</html>