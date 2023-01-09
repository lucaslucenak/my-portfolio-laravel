<section id="about">
    <h5>Get to Know</h5>
    <h2>About Me</h2>

    <div class="container about__container">
        <div class="about__me">
            <div class="about__me-image">
                <img src = "{{asset('img/me.png')}}"/>
            </div>
        </div>

        <div className="about__content">
            <div className="about__cards">
                <article className="about__card">
                    <FaAward className='about__icon'/>
                    <h5>Experience</h5>
                    <small>1 Year Working</small>
                </article>

                <article className="about__card">
                    <FaUniversity className='about__icon'/>
                    <h5>Student from UEPB</h5>
                    <small>CRA: 9.09</small>
                </article>

                <article className="about__card">
                    <VscFolderLibrary className='about__icon'/>
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

            <a href="#contact" className='btn btn-primary'>Let's Talk</a>
        </div>
    </div>
</section>
