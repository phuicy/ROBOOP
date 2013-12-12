<?php
  require "roboop.inc.php";

  myheader("What's New");
?>

    <h2>
      WHAT'S NEW
    </h2>
    <p>
      This page displays an up-to-date listing of changes to the
      ROBOOP web. We'll also place notices here regarding package
      updates, scheduled releases, or problems and work-arounds
      that may affect users. When bugs reported by users get fixed,
      we'll place a notice here.
    </p>
    <blockquote>
      <p>
        <strong>Thursday, December 12, 2013</strong>
      </p>
      <ul>
        <li>ROBOOP release 1.32.
        <p>
          <i>OpenWatcom</i> support is dropped.
        </p>
        <p>
          Upgraded the matrix library to <i>NEWMAT11 (beta) November 2008</i>.
        </p>
        <p>
          Code clean up dealing with some warnings.        </p>
        <p>
          Call to <i>Gnuplot</i> under <i>Windows</i> is now using pipes.
        </p>
        <p>
          Removed <i>CVS</i> keywords tags.
        </p>
        <p>
          <tt>inv_kin</tt> immobile joint index bug corrected
          (thanks to Matteo Malosio).
        </p>
        </li>
      </ul>
      <p>
        <strong>Friday, February 9, 2007</strong>
      </p>
      <ul>
        <li>Release 1.04 of the package GLroboop.
        <p>
          <ul>
          <li>GLroboop is now using Unicode
          </li>
          <li>New installation instructions
          </li>
          </ul>
        </li>
      </ul>
      <p>
        <strong>Thursday, December 14, 2006</strong>
      </p>
      <ul>
        <li>ROBOOP release 1.31.
        <p>
          The project can now use
          <a name="tex2html23" href="http://www.cmake.org/"><i>CMake</i></a>
          or <a name="tex2html24"
           href="http://bakefile.sourceforge.net/"><i>Bakefile</i></a>
          for automated <tt>makefile</tt> generation. In future releases,
          <i>hand made</i> makefiles and project files will be replaced by the
          output of <i>CMake</i> or <i>Bakefile</i>.
        </p>
        <p>
            Corrected bug in irotk (reported by Chris Lightcap).
        </p>
        </li>
      </ul>
      <p>
        <strong>Thursday, August 17, 2006</strong>
      </p>
      <ul>
        <li>ROBOOP release 1.30.
        <p>
          Upgraded the matrix library to <i>NEWMAT11 (beta) April 2006</i>
          enabling compilation under <i>GNU g++ 4.1.x</i>.
        </p>
        </li>
      </ul>
      <p>
        <strong>Friday, April 19, 2006</strong>
      </p>
      <ul>
        <li>Release 1.03 of the package GLroboop.
        <p>
          <ul>
          <li>Updated for ROBOOP release 1.29.
          </li>
          <li>Insert STL object dialog is now using sizers.
          </li>
          <li>Removed unused files.
          </li>
          </ul>
        </li>
      </ul>
      <p>
        <strong>Friday, April 19, 2006</strong>
      </p>
      <ul>
        <li>ROBOOP release 1.29.
        <p>
          <i>OpenWatcom</i> support is (temporally) suspended. Fixed gear
          ratio bug for viscous friction (reported by Carmine Lia). Fix
          <tt>set_q</tt>, <tt>set_qp</tt> bug in <tt>xdot</tt> (reported by
          Philip Gruebele)
        <p>
          The following changes have been contributed by Etienne Lachance
          <ul>
          <li>The inverse kinematics function (<tt>inv_kin</tt>) should
            return the solution without changing the robot position (reported
            by J.D. Yamokoski).
          </li>
          <li>Functions <tt>Rhino_DH</tt>, <tt>Puma_DH</tt>,
            <tt>Schilling_DH</tt>, <tt>Rhino_mDH</tt>, <tt>Puma_mDH</tt>
            and <tt>Schilling_mDH</tt> use <tt>const Robot_basic</tt>
            reference instead of<tt> const Robot_basic</tt> pointer.
          </li>
          <li>Prevent exceptions from leaving <tt>Robot_basic</tt> destructor.
          </li>
          <li>Catch exception by reference instead of by value.
          </li>
          </ul>
        </li>
      </ul>
      <p>
        <strong>Wednesday, December 07, 2005</strong>
      </p>
      <ul>
        <li>ROBOOP release 1.28.
        <p>
          The following changes have been contributed by Etienne Lachance
          <ul>
          <li>Removing unnecessary copy constructor and the assignment
            operator (operator=) in many classes.
          </li>
          <li>In the <tt>Quaternion</tt> class, the operator* and operator/
            are now non-member functions when one of the operand is a real, it
            now supports q2 = c * q1 and &gt; q2 = q1 * c
          </li>
          </ul>
        </li>
      </ul>
      <p>
        <strong>Saturday, November 12, 2005</strong>
      </p>
      <ul>
        <li>
          Release 1.02 of the package GLroboop:
          <ul>
          <li>GLroboop now uses wxWidgets international support for UI
            languages (English, French, Spanish and Simplified Chinese:
            thanks to the translators).
          </li>
          <li>Simpler code for the file open/save dialogs.
          </li>
          <li>Getting closer to be Unicode ready (thanks to Lars S. Jessen).
          </li>
           </ul>
        </li>
      </ul>
      <p>
        <strong>Tuesday, October 11, 2005</strong>
      </p>
      <ul>
        <li>
          ROBOOP release 1.27. It is now possible to turn off warning
          messages in the <tt>Config</tt> class.
        </li>
      </ul>
      <p>
        <strong>Friday, September 16, 2005</strong>
      </p>
      <ul>
        <li>
          Release 1.01 of the package GLroboop can now be
          compiled under Mac OS X (see the install documentation):
          updated files are available in the download section
          (<strong>but running the program generates a "bus error"</strong>,
          to be fixed in the next release: any help from Mac OS X
          users would be appreciated).
        </li>
      </ul>
      <p>
        <strong>Tuesday, September 6, 2005</strong>
      </p>
      <ul>
        <li>
          Release 1.01 of the package GLroboop:
          <ul>
          <li>GLroboop now uses wxWidgets 2.6.1.
          </li>
          <li>Fixed <tt>catch(bad_alloc)</tt> in constructors.
          </li>
           </ul>
        </li>
      </ul>
      <p>
        <strong>Tuesday, July 5, 2005</strong>
      </p>
      <ul>
        <li>ROBOOP Release 1.26
          <ul>
          <li>New Class <tt>Stewart</tt> contributed by Samuel Belanger
            (integrated by Etienne Lachance and Richard Gourdeau): new files
            <tt>stewart.h</tt> and <tt>stewart.cpp</tt> and modified
            <tt>bench.cpp</tt>.
          </li>
          <li>Fixed max() bug for VC++ 6.0 (<tt>utils.cpp</tt>).
          </li>
           <li>Typos in Doxygen documentation.
           </li>
           </ul>
         </li>
      </ul>
      <p>
        <strong>Monday, June 13, 2005</strong>
      </p>
      <ul>
        <li>ROBOOP Release 1.25
        <p>
        Fixed <tt>catch(bad_alloc)</tt> in constructors.
        <p>
          The following changes have been contributed by Etienne Lachance
          <ul>
          <li>The desired joint acceleration was missing in the computed
            torque method (bug reported by Carmine Lia).
          </li>
          <li>Added missing file message in <tt>trajectory.cpp</tt>
          </li>
          </ul>
          The following changes have been contributed by Carmine Lia
          <ul>
          <li>Added <tt>defined(__MINGW32__)</tt> for temp files in
          <tt>gnugraph.cpp</tt>.
          </li>
          <li>Added <tt>pinv</tt> in <tt>utils.cpp</tt>.
          </li>
          </ul>
      </ul>
      <p>
        <strong>Tuesday, March 22, 2005</strong>
      </p>
      <ul>
        <li>
          First public release of the package GLroboop (GLroboop Release 1.0)
          thanks to Jean-François Mercure Burroughs and Etienne Lachance.
        </li>
      </ul>
      <p>
        <b>Friday, March 18, 2005</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.24. 
        <p>
          The following changes have been contributed by Brian Galardo,
          Jean-Pascal Joary, Etienne Lachance:
          <ul>
          <li>Added member functions <tt>Robot::inv_schilling</tt>, 
            <tt>mRobot::inv_schilling</tt> and
            <tt>mRobot_min_para::inv_schilling</tt> for the
            <i>Schilling Titan II</i> robot arm,
          </li>
          <li>Fixed previous bug on Rhino and Puma inverse kinematics.
          </li>
          </ul>
          by Etienne Lachance: 
          <ul>
          <li>Some ``clean-up'' in the <tt>config.h</tt> and
            <tt>config.cpp</tt> files,
          </li>
          </ul>
          and by Stephen Webb :
          <ul>
          <li>minor bug in constructor <tt>Robot_basic(const
            Robot_basic &amp; x)</tt>.
          </li>
          </ul>
        </ul>
      <p>
        <b>Saturday, September 18, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.23. 
        <p>
        The following change has been contributed by Etienne Lachance:
        <ul>
          <li>Configuration files can use degrees for the angles with the
            option <tt>angle_in_degree</tt> set to 1.
          </li>
        </ul>
        </li>
      </ul>
      <p>
        <b>Friday, September 10, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.22. 
        <p>
        The following change has been contributed by Etienne Lachance:
        <ul>
          <li>In <tt>config.cpp</tt>: parameter value can now contain space
            and fixed print member function.
          </li>
        </ul>
        Carl Glen Henshaw provided a makefile for MAC OS X.
        </li>
      </ul>
      <p>
        <b>Monday, August 16, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.21. 
        <p>
        The following changes have been contributed by Etienne Lachance
        <ul>
          <li>Fixed some missing <tt>use_namespace #define</tt>.
          </li>
          <li>Merge all <tt>select_*</tt> and <tt>add_*</tt> functions
            into overloaded <tt>select()</tt> and <tt>add()</tt> functions.
          </li>
          <li>made <tt>gnuplot.cpp</tt> and <tt>config.cpp</tt> independent
            of <tt>robot.h</tt> and <tt>utils.h</tt>.
          </li>
          <li>New constructors for <tt>Robot</tt> and <tt>mRobot</tt> based
            on input matrices (this change is NOT backward compatible)
          </li>
        </ul>
        The following changes have been contributed by Ethan Tira-Thompson
        <ul>
          <li>Supports for <tt>Link::immobile</tt> flag so jacobians and
            deltas are 0 for immobile joints.
          </li>
          <li>Jacobians will only contain entries for mobile joints -
            otherwise NaNs result in later processing.
          </li>
          <li>Added parameters to jacobian functions to generate for frames
            other than the end effector.
          </li>
          <li>Can now do inverse kinematics for frames other than end
            effector.
          </li>
          <li>Tolerance in <tt>inv_kin</tt> based on <tt>USING_FLOAT</tt>
            from newmat's <tt>include.h</tt>
          </li>
        </ul>
      </ul>
      <p>
        <b>Tuesday, July 6, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.20. 
        <p>
          The following changes have been contributed by Ethan Tira-Thompson
        <p>
          <ul>
            <li>Added support for newmat's <tt>use_namespace</tt>
              <tt>#define</tt>, using <tt>ROBOOP</tt> namespace.
            </li>
            <li>Fixed some problem using <tt>float</tt> as <tt>Real</tt> type.
            </li>
          </ul>
        <p>
          The following changes have been contributed by Etienne Lachance
        <p>
          <ul>
            <li>Added the following class: <tt>Dynamics</tt>,
              <tt>Trajectory_Select</tt>, <tt>Proportional_Derivative</tt>
              and<tt> Control_Select</tt>.
            </li>
            <li>Added a new demo program, call <tt>demo_2dof_pd</tt>. This
              new demo program shows how to use the class mentioned above.
            </li>
            <li>Protection added on input vector of the <tt>trans</tt>
              function.
            </li>
            <li>Added a <tt>joint_offset</tt> logic. This idea has been
              proposed by Ethan Tira-Thompson.
            </li>
            <li>Added <I>Doxygen</I> documentation.
            </li>
            <li>Replace files <tt>impedance.*</tt> by <tt>controller.*</tt>.
            </li>
          </ul>
        </li>
      </ul>
      <p>
        <b>Wednesday, May 12, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.19. Upgraded the matrix library from
          <i>NEWMAT10</i> to <i>NEWMAT11 (beta)</i>. <i>Visual C++
         .NET</i> and <i>Borland C++ Builder 6</i> compilers are now
         supported. Updated documentation.
        </li>
      </ul>
      <p>
        <b>Wednesday, May 5, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.18. <i>ROBOOP</i> is relicensed to the
          GNU Lesser General Public License. Updated documentation.
        <p>The following changes have been contributed by Vincent Drolet
          and Etienne Lachance:
        <ul>
          <li>Added the following members function in class Robot:
          <tt>inv_kin_rhino</tt>, <tt>inv_kin_puma</tt> and
          <tt>robottype_inv_kin</tt>.</li>
        </ul>
        </li>
      </ul>
      <p>
        <b>Friday, April 2, 2004</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.17. Numerous warning messages were corrected 
          under <i>VC++</i>. Updated documentation.  
        <p> The following changes have been contributed by Etienne 
          Lachance: </p>
        <ul>
          <li>Added class <tt>Impedance</tt> which implements the 
            impedance controller. </li>
          <li>Added function <tt>perturb_robot</tt>. </li>
          <li>Added class <tt>Resolve_acc</tt> which implements the 
            resolve rate acceleration position controller. </li>
          <li>Added class <tt>Computed_torque_method</tt> which 
            implements the computed torque method position controller. </li>
          <li>Class <i>Config</i> can now write data into a configuration
            file. </li>
          <li>Fixed bugs in <tt>Quaternion</tt> class member functions:
            <tt>exponential</tt> and <tt>logarithm</tt>. </li>
          <li>Added <tt>Quaternion</tt> class member function
            <tt>power</tt>. </li>
          <li>Added the following <tt>Quaternion</tt> class non member
            functions: <tt>Omega</tt>, <tt>Slerp</tt>, <tt>Slerp_prime</tt>,
            <tt>Squad</tt> and <tt>Squad_prime</tt>. </li>
          <li>Provided <tt>Spl_Quaternion</tt> class to generate
            quaternions cubic splines. </li>
          <li>Added class <tt>Spl_Cubic</tt> to generate cubic splines. </li>
          <li>Added class <tt>Spl_path</tt> to generate 3D cubic splines. </li>
          <li>Provided <tt>CLIK</tt> class for closed loop inverse
             kinematics. </li>
          <li>Added member functions <tt>G</tt> and <tt>C</tt> in all 
            robot classes.  </li>
          </ul>
        </li>
      </ul>
      <p>
        <b>Wednesday, September 24, 2003</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.16. The OpenWatcom C++ compiler is now supported. 
          Updated documentation.</li>
      </ul>
      <p>
        <b>Wednesday, June 18, 2003</b>
      </p>
      <ul>
        <li>ROBOOP Release 1.15. The following changes have been contributed 
        by Etienne Lachance:
       	<ul>
          <li>Updated documentation.</li>
          <li>Definitions in file <tt>gnugraph.cpp</tt> are now in
            <tt>gnugraph.h</tt>.</li>
          <li>Class <tt>Plot2d</tt>, <tt>GNUcurve</tt> are now using
            <i>STL</i> <tt>string</tt> instead of <tt>char*</tt>.</li>
          <li>Added member functions <tt>jacobian_dot()</tt> and
            <tt>jacobian_DLS_inv()</tt> in all robot classes.</li>
          <li>Added class <tt>Config</tt> to read configuration file.</li>
          <li>Replaced <tt>Robot_basic(const char *filename)</tt> by
            <tt>Robot_basic(const string &amp; filename)</tt>. The new
            constructor uses the class <tt>Config</tt>.</li>
          <li>Provided <tt>Plot_file</tt> class to generate graphics from a
            data file.</li>
          <li>Added the following <tt>Quaternion</tt> class member
            functions: <tt>exponential</tt>, <tt>logarithm</tt>,
           <tt>dot_product</tt>, <tt>dot</tt>, <tt>E</tt>.</li>
           <li>Fixed bugs in <tt>IO_matrix_file</tt> class.</li>
           <LI>Developed linearized equations for modified DH notations. The
             equations are implemented in <tt>dq_torque</tt>,
             <tt>dqp_torque</tt>, <tt>dtau_dq</tt> and <tt>dtau_dqp</tt>.</li>
           <li>Added examples in <tt>demo.cpp</tt> related to
             <tt>IO_matrix_file</tt>, <tt>Plot_file</tt> and
             <tt>Config</tt>.</li>
         </ul>
      </ul>
      <p>
        <b>Thursday, April 17, 2003</b>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.14. Updated documentation. The <i>Watcom</i>
          compiler is no longer supported (problems with <i>STL</i>
          and streams). The following changes have been contributed
          by Etienne Lachance: 
          <ul>
            <li>
              The classes <tt>RobotMotor</tt> and
              <tt>mRobotMotor</tt> no longer exist and are now
              integrated in the <tt>Robot</tt> and <tt>mRobot</tt>
              classes.
            </li>
            <li>
              The <tt>Robot</tt> and <tt>mRobot</tt> classes are
              now derived from the <tt>Robot_basic</tt> virtual
              class.
            </li>
            <li>
              Removed class <tt>mlink</tt>. DH and modified DH
              parameters are now included in <tt>link</tt>.
            </li>
            <li>
              Added <tt>kine_pd()</tt>.
            </li>
            <li>
              Created a new <tt>torque</tt> member function that
              allowed to have load on last link.
            </li>
            <li>
              Fixed bug in modified DH dynamics.
            </li>
            <li>
              Added a class <tt>Quaternion</tt>.
            </li>
            <li>
              Added the program <tt>rtest</tt> to compare results
              with Peter Corke <<i>MATLAB</i> toolbox.
            </li>
            <li>
              Added member function <tt>set_plot2d</tt> to generate
              plots using the <tt>Plot2d</tt> class.
            </li>
            <li>
              Added utility class <tt>IO_matrix_file</tt> dealing
              with data files (not documented yet).
            </li>
          </ul>
        </li>
      </ul>
      <p>
        <b>Friday, August 9, 2002</b>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.13. Moved the arrays of ColumnVector to the
          constructors for the dynamics and linearized dynamics for
          a gain in speed ~10% (thanks to Etienne Lachance for the
          suggestion). Added the mRobot and mRobotMotor classes
          using the modified Denavit-Hartenberg notation. Updated
          documentation.
        </li>
      </ul>
      <p>
        <b>Monday, February 4, 2002</b>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.12. Upgraded the matrix library from NEWMAT09
          to NEWMAT10. Updated documentation.
        </li>
      </ul>
      <p>
        <b>Wednesday, June 6, 2001</b>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.11. Fixed bugs for prismatic joints in the
          dynamics routines (reported by Hassan Abedi). Updated
          documentation.
        </li>
      </ul>
      <p>
        <b>Monday, April 30, 2001</b>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.10. Changed the license to GNU General Public
          License. Workspace for MS Visual C++ 6.0. New makefiles
          using implicit rules. New class RobotMotor that includes
          motors parameters (rotor inertia, gear ratio and friction
          coefficients). Updated documentation.
        </li>
      </ul>
      <p>
        <b>Friday, February 16, 2001</b>
      </p>
      <ul>
        <li>
          Microsoft Visual C++ 6.0 Workspace and Project Files
          available for download
        </li>
      </ul>
      <p>
        <strong>Sunday, September 27, 1998</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.09. Makefile for MS Visual C++ 6.0.
        </li>
      </ul>
      <p>
        <strong>Monday, June 1, 1998</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.08. Changes to <tt>robot.cpp</tt> and
          <tt>robot.h</tt> to avoid the warning messages:<br>
           <code>initialization of non-const reference `*' from
          rvalue `*'</code><br>
           Fixed function <tt>ieulzxz</tt> in <tt>homogen.cpp</tt>
          thanks to Kilian Pohl.
        </li>
      </ul>
      <p>
        <strong>Tuesday, May 12, 1998</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.07. The <tt>bench.cpp</tt> program is more
          portable. Simpler makefile for Borland C++. New targets
          in makefiles (<tt>clean</tt> and <tt>veryclean</tt>).
          Removed the CVS <tt>Log</tt> tags from the sources.
          Compiler option <tt>-O</tt> now works under gcc 2.7.2
          thanks to the new <tt>newmat.h</tt> provided by Robert
          Davies.
        </li>
      </ul>
      <p>
        <strong>Saturday, March 14, 1998</strong>
      </p>
      <ul>
        <li>
          Mailing lists for
          announcement and discussion.
        </li>
      </ul>
      <p>
        <strong>Friday, November 21, 1997</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.06. The function inv_kin modified to use the
          Jacobian by default in the iterative procedure (~1.8x
          faster). Updated documentation.
        </li>
      </ul>
      <p>
        <strong>Monday, November 17, 1997</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.05. Added make file for GNU G++ under Windows
          95/NT using Cygnus GNU-Win32 compiler. Added optimization
          flags under GNU G++. Updated documentation.
        </li>
      </ul>
      <p>
        <strong>Friday, November 14, 1997</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.04. Added make file for GNU G++ and graphic
          support through gnuplot (2d plots). Updated
          documentation.
        </li>
      </ul>
      <p>
        <strong>Saturday, November 1, 1997</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.03. Added adaptive step size integration.
          Changes to the documentation.
        </li>
      </ul>
    </blockquote>
    <blockquote>
      <p>
        <strong>Tuesday, October 21, 1997</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.02. Upgraded the matrix library from NEWMAT08A
          to NEWMAT09. New directory structure : <tt>newmat08</tt>
          is replaced by <tt>newmat</tt>. Conditional compilation
          of <tt>delete []</tt> for pre 2.1 C++ compilers has been
          removed since NEWMAT09 no longer supports these
          compilers. Minor changes to the documentation.
        </li>
      </ul>
      <p>
        <strong>Friday, January 17, 1997</strong>
      </p>
      <ul>
        <li>
          ROBOOP Release 1.01. Conditional compilation of <tt>delete
          []</tt> for pre 2.1 C++ compilers. Changes to the
          documentation.
        </li>
      </ul>
      <p>
        <strong>Sunday, December 15, 1996</strong>
      </p>
      <ul>
        <li>
          First public release of the package (ROBOOP Release 1.0)
        </li>
        <li>
          Web site placed on-line
        </li>
      </ul>
    </blockquote>
    
<?php
  myfooter('$Date: 2007/02/09 14:00:24 $');
?>