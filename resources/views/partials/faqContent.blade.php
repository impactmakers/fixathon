@if(Request::path() === 'faq')
<section class="container top__container subpage__container" id="faq">
@else
<section class="container subpage__container faq__container" id="faq">
@endif
  <div class="inner subpage__inner">
    <div class="subpage__content">
      @if(Request::path() === 'faq')
      <h1 class="brush__title brush__title--large subpage__title">
        FAQs
      </h1>
      @else
      <h1 class="brush__title brush__title--large subpage__title">
        FAQs
      </h1>
      @endif



      <h2>📝 How do I submit my project?</h2>
      <p>  

      To submit your project for consideration you must complete our project submission form by 23:59 PT on Friday 30th August. Check it out for more information on what you need to do.
      </p>


      <a class="intro__cta intro__subcta" href="https://forms.gle/USjZHhi2KbM2xztJ9">
          <button type="submit" class="btn-simple btn-md btn-green btn-mobile"
          >Submit your project</button>
        </a>
        <br />
        <br />
      <br />
      <p>
        If you'd like to appear as a product on fixathon.io please also make sure it is added as a <a href="https://getmakerlog.com/products/">Makerlog product</a>. Once it is you should add it to the Fixathon event by editing the product and adding it to our event on the event tab.
      </p>

        <div class="subpage__divider"></div>

      <h2>🗓 What is the event schedule?</h2>
      <p>The Fixathon will officially <b>begin at 12:00 PT on Friday 2nd August</b> and <b>end at 23:59 PT on Friday 30th August</b>. Use a <a href="https://www.worldtimebuddy.com/">timezone converter</a> to find the start and end times in your local timezone. </p>

      <p>Upon the Fixathon ending our judges will go through submissions and decide which projects they feel should be given our Action, Awareness and Facilitation awards.</p>

      <p>Winners will be announced on Thursday 5th September.</p>

      @if (!Auth::check())
        <div class="subpage__divider"></div>
        <h2>✅ How do I register?</h2>
        <p>  
          To take part you must have created a user account on <a href="https://getmakerlog.com/begin/">Makerlog</a> and register to attend the <a href="https://getmakerlog.com/events/the-climate-fixathon/">Climate Fixathon event</a>.
        </p>
      @endif


      <div class="subpage__divider"></div>      

      <h2>👥 Is there a maximum team size?</h2>
      <p>Teams can be any size. Please note that we may not be able to provide some prizes to teams of more than 4 people.</p>

      <div class="subpage__divider"></div>

      <h2>🔍 How do I find team members?</h2>
      <p>Ask for collaborators in the Impact Makers <a href='https://join.slack.com/t/impact-makers-group/shared_invite/enQtNjQ2MTY3NDM1MjcxLWUwNjA1YWViZmI1NjQ5YTIzMjA1OWE2NzI3NzMwNzQ0ODBiMmZlMzI0YTI4MDUyMzlhNmZhZDFiOWZkODQ0Yjg' target='_blank'>#meet-makers</a> Slack channel or tweet with the hashtag <a href='https://twitter.com/search?f=tweets&vertical=default&q=%23fixathonteamup&src=typd' target='_blank'>#fixathonteamup</a>.</p>
  
      <div class="subpage__divider"></div>

      <h2>🤔 Don't know what you're going to work on yet?</h2>
      <p>No problem! Please still register for the event. You can decide on your project later. We’ve created a <a title="Fixathon Project Inspiration" href='https://www.notion.so/fixathon/Fixathon-Project-Inspiration-1b44731d0057436da6bb41f1c09207af' target='_blank'>Fixathon Project Inspiration</a> page to help guide and inspire you. Hopefully, something you find here will spark an idea!</p>
      
      <div class="subpage__divider"></div>
      <h2>💸 What kinds of projects are eligible to win prizes?</h2>
      <p>Any website, app or service that aims to help restore a safe climate for our planet can be entered. Please keep in mind that winners will be selected based on the definitions of our 3 awards:</p>
      <p><b>👁️ Awareness:</b> Most likely to raise awareness of climate breakdown.</p>
      <p><b>👊 Action:</b> Most likely to help people take action against climate breakdown.</p>
      <p><b>🛠️ Facilitation:</b> Most likely to make climate breakdown related tech projects easier to create in the future</p>

      <p>For example you could create a website that raises awareness for politicians who prioritise the planet, or an app that helps people to convince companies to reduce their emissions, or an API that makes ongoing atmospheric CO2 data available to anyone.</p>

      <div class="subpage__divider"></div>
      <h2>▲ How do I win the ZEIT prize?</h2>
      <p>Any project that is deployed to <a href='https://zeit.co/' title='Zeit' target='_blank'>ZEIT Now</a> will be eligible for the ZEIT Cash Prize. There will be one winning project selected based on it's likelihood to help prevent climate breakdown. We'll also be taking design and implementation into account for this award.</p>
      
      <div class="subpage__divider"></div>
      <h2>💸 Can I enter a for-profit project?</h2>
      <p>Yes for-profit projects are eligible to enter and win.</p>

      <div class="subpage__divider"></div>
      <h2>🔑 Who owns projects created during the Fixathon?</h2>
      <p>You (or you and your team) have full ownership of whatever you make and we hope you'll continue to develop your project beyond the event!</p>

      <div class="subpage__divider"></div>
      <h2>⏰ Is there a minimum time requirement to take part?</h2>
      <p>No it's up to you how much time you commit to your project.</p>

      <div class="subpage__divider"></div>
      <h2>🚧 I've already started working on my project. Can I still enter?</h2>
      <p>Yes as long as your project is not launched before the Fixathon begins it can be entered.</p>
      
      <div class="subpage__divider"></div>
      <h2>💻 Do I have to use Makerlog during the event?</h2>
      <p>No it's up to you how much you use Makerlog during the event (however we do encourage you to try and build in the open). You are only required to register your attendance and submit your project on Makerlog.</p>

      <div class="subpage__divider"></div>
      <h2>💬 Where can I chat to others about the Fixathon?</h2>
      <p>If you'd like to chat about the Fixathon, get feedback on your project or find team members join the <a href="https://techimpactmakers.com/">Impact Makers</a> Slack group.</p>
      <p>If you have a question about the event email <a href="mailto:hi@fixathon.io">hi@fixathon.io</a></p>

    </div>
  </div>
</section>