<x-layout>
    <section id="about">
        <div className="container header__container">
            <h5>Hey, I'm</h5>
            <h1>Lucas Lucena</h1>
            <h5 className="text-light">Backend Developer</h5>
            <CTA />
            <HeaderSocials />

            <div className="me">
                <img src="{{asset('img/me.png')}}" alt="me"/>
            </div>

            <a href="#contact" className="scroll__down">Scroll Down</a>
        </div>

        <h5>Get to Know</h5>
        <h2>About Me</h2>
        <div class="container about__container">
            <div class="about__me">
                <div class="about__me-image">
                    <img src = "{{asset('img/me.png')}}"/>
                </div>
            </div>

            <div class="about__content">
                <div class="about__cards">
                    <article class="about__card">
                        <FaAward class='about__icon'/>
                        <h5>Experience</h5>
                        <small>1 Year Working</small>
                    </article>

                    <article class="about__card">
                        <FaUniversity class='about__icon'/>
                        <h5>Student from UEPB</h5>
                        <small>CRA: 9.09</small>
                    </article>

                    <article class="about__card">
                        <VscFolderLibrary class='about__icon'/>
                        <h5>Projects</h5>
                        <small>6+ Completed</small>
                    </article>
                </div>

                <p align= 'justify'>When I was 12 I decided to be a developer. Since I was a child, had a lot of affinity with
                    technology,
                    I used to assemble and disassemble computers, watch videos about how software and hardware technologies
                    works "under the hood".
                    At 18 started to study Computer Science in State University of Paraíba convinced that this was the way that
                    a want do take,
                    and with each new thing I learn I get even more sure of this decision! Programming and learning new things
                    became leisure for me, not exactly a job.</p>

                <a href="#contact" class='btn btn-primary'>Let's Talk</a>
            </div>
        </div>
    </section>
</x-layout>

