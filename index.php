<?php include 'layout.php' ?>

<?php startblock('head') ?>
    <style>
        body {
            background-color: #63B78F;
        }

        header {
            height: 500px;
            background-color: #162820;
        }

        header .hero-banner {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        header h1,
        header h2 {
            margin: 10px;
        }

        header h1 {
            font-size: 2.8em;
        }

        header h2 {
            font-size: 2em;
        }

        header .nav {
            width: 175px;
            margin: 0;
            top: 50%;
            right: 5%;
            transform: translate(-5%, -50%);
        }

        header .nav .nav-list {
            white-space: normal;
        }

        header .nav .nav-list li {
            display: list-item;
            margin: 0;
        }

        header .nav .nav-list .svg {
            display: inline-block;
        }

        footer {
            background-color: #162820;
        }
    </style>
<?php endblock() ?>

<?php startblock('content') ?>
    <section class="container">
        <div id="about" class="column text-blob">
            <div class="text">
                <p>
                    Come join us at the Community Science Museum where we’re committed to making science accessible to all.
                </p>
                <p>
                    Over the course of human history, science has developed from our early understanding of fire, wind, water, and earth to exploring everything from galaxies far away to the very building blocks of life itself.
                </p>
            </div>

        </div>

        <div class="column">
            <div class="row text">
                <h1>What We Do</h1>
                <p>
                    The aim of our museum is to create a space where everyone can experience the wonders of our discoveries and perhaps even ignite a lifelong passion to continue the exploration of the world around us.
                </p>
                <p>
                    We believe science should not be confined to the textbook, but brought to live through exhibits. This is why we have over 1000 different exhibits on the many varied subjects of science to explore. Many of these exhibits are designed for you to interact with and play around to see science come to life (apart from the dinosaur exhibits – they only come to life at night when everyone’s gone home).
                </p>
            </div>
            <div id="what-we-do" class="img"></div>

        </div>

        <div id="club" class="column text-blob">
            <div class="text">
                <p>
                    During the school holidays we run special holiday clubs where you can join other children your age to go on a journey of discovery. Each holiday we pick a new theme to explore. To find out more about the holiday club and how you can join, send us a message.
                </p>
            </div>

        </div>

        <div class="column">
            <div id="for-kids" class="img"></div>
            <div class="row text">
                <h1>For Kids</h1>
                <p>
                    Are you a young person looking to learn more about science? Come on down to our museum, there’s plenty to see and do.
                </p>
                <p>
                    You can learn about Newtonian physics from our bumper swing, or why not travel back in time and meet our resident Woolly Mammoth? Our exhibits are designed to be accessible for interested minds, so make sure you come ready to learn and explore.
                    We also have the Young Stars club which meets once a week on a Saturday between 10:00 and 13:00 where you’ll get to explore and experiment with our team of experts.
                </p>
            </div>

        </div>

        <div id="entrance" class="column text-blob">
            <div class="text">
                <p>
                    The entrance is free for all.
                </p>
                <p>
                    There are guided tours of the museum that leave every hour. These tours are 70 NOK per person and include a handy printed guide of the museum. If you would like to organise a guided tour for your group of 6 or more people, please contact us to arrange the tour.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="row text">
                <h1>For Teachers</h1>
                <p>
                    As a community-driven museum, we want to work with schools to create places of learning and exploring. Our team are on hand to give your students guided tours of the museum, teach them in our learning laboratory, and provide great video presentations that will excite and inspire them.
                </p>
                <p>
                    Please get in touch with us here to find out more about our facilities and to arrange a time to bring your students through for a visit.
                </p>
            </div>
            <div id="for-teachers" class="img"></div>
        </div>

        <div id="accessibility" class="column text-blob">
            <div class="text">
                <p>
                    The museum has wheelchair accessibility ramps. It also has audio guides and braille display signs for the visually impaired.
                </p>
                <p>
                    There is a café attached to the museum where you can get light lunches, soft drinks, coffee, snacks and more.
                </p>
                <p>
                    Our shop offers a range of memorabilia from the museum as well as great gifts and activity packs that allow you to continue to explore science even after you’ve left the museum.
                </p>
            </div>
        </div>

        <div class="column">
            <div class="row text">
                <h1>For Researchers</h1>
                <p>
                    Are you looking to get involved with our team of researchers and academics? Our museum offers various ways for you to use our resources and contribute towards them. We have online records, laboratory space, and a working relationship with a number of universities around the country.
                </p>
            </div>
            <div id="for-researchers" class="img">
            </div>
        </div>

    </section>
<?php endblock() ?>
