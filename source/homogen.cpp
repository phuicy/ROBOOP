/*
ROBOOP -- A robotics object oriented package in C++
Copyright (C) 1996-2004  Richard Gourdeau

This library is free software; you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as
published by the Free Software Foundation; either version 2.1 of the
License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


Report problems and direct all questions to:

Richard Gourdeau
Professeur Agrege
Departement de genie electrique
Ecole Polytechnique de Montreal
C.P. 6079, Succ. Centre-Ville
Montreal, Quebec, H3C 3A7

email: richard.gourdeau@polymtl.ca

-------------------------------------------------------------------------------
Revision_history:

2004/07/01: Etienne Lachance
   -Added protection on trans function.
   -Added doxygen documentation.

2004/07/01: Ethan Tira-Thompson
    -Added support for newmat's use_namespace #define, using ROBOOP namespace

2004/08/10: Etienne Lachance
    -Make sure input vector is 3x1 in trans function.

2006/01/21: Etienne Lachance
    -Include utils.h instead of robot.h.

2006/11/15: Richard Gourdeau
    -atan2() in irotk()
-------------------------------------------------------------------------------
*/

/*!
  @file homogen.cpp
  @brief Homogen transformation functions.
*/

//! @brief RCS/CVS version.
static const char rcsid[] = "$Id: homogen.cpp,v 1.15 2006/11/15 18:35:17 gourdeau Exp $";

#include "utils.h"

#ifdef use_namespace
namespace ROBOOP {
  using namespace NEWMAT;
#endif


ReturnMatrix trans(const ColumnVector & a)
//!  @brief Translation.
{
   Matrix translation(4,4);

   translation << fourbyfourident; // identity matrix 

   if (a.Nrows() == 3) 
     {
       translation(1,4) = a(1);
       translation(2,4) = a(2);
       translation(3,4) = a(3);
     }
   else
       cerr << "trans: wrong size in input vector." << endl;

   translation.Release(); return translation;
}

ReturnMatrix rotx(const Real alpha)
//!  @brief Rotation around x axis.
{
   Matrix rot(4,4);
   Real c, s;

   rot << fourbyfourident; // identity matrix 

   c = cos(alpha);
   s = sin(alpha);

   rot(2,2) = c;
   rot(3,3) = c;
   rot(2,3) = -s;
   rot(3,2) = s;

   rot.Release(); return rot;
}


ReturnMatrix roty(const Real beta)
//!  @brief Rotation around x axis.
{
   Matrix rot(4,4);
   Real c, s;

   rot << fourbyfourident; // identity matrix

   c = cos(beta);
   s = sin(beta);

   rot(1,1) = c;
   rot(3,3) = c;
   rot(1,3) = s;
   rot(3,1) = -s;

   rot.Release(); return rot;
}


ReturnMatrix rotz(const Real gamma)
//!  @brief Rotation around z axis.
{
   Matrix rot(4,4);
   Real c, s;

   rot << fourbyfourident; // identity matrix

   c = cos(gamma);
   s = sin(gamma);

   rot(1,1) = c;
   rot(2,2) = c;
   rot(1,2) = -s;
   rot(2,1) = s;

   rot.Release(); return rot;
}

// compound rotations 


ReturnMatrix rotk(const Real theta, const ColumnVector & k)
//! @brief Rotation around arbitrary axis.
{
   Matrix rot(4,4);
   Real c, s, vers, kx, ky, kz;

   rot << fourbyfourident; // identity matrix

   vers = SumSquare(k.SubMatrix(1,3,1,1));
   if (vers != 0.0) { // compute the rotation if the vector norm is not 0.0
      vers = sqrt(1/vers);
      kx = k(1)*vers;
      ky = k(2)*vers;
      kz = k(3)*vers;
      s = sin(theta);
      c = cos(theta);
      vers = 1-c;

      rot(1,1) = kx*kx*vers+c;
      rot(1,2) = kx*ky*vers-kz*s;
      rot(1,3) = kx*kz*vers+ky*s;
      rot(2,1) = kx*ky*vers+kz*s;
      rot(2,2) = ky*ky*vers+c;
      rot(2,3) = ky*kz*vers-kx*s;
      rot(3,1) = kx*kz*vers-ky*s;
      rot(3,2) = ky*kz*vers+kx*s;
      rot(3,3) = kz*kz*vers+c;
   }

   rot.Release(); return rot;
}


ReturnMatrix rpy(const ColumnVector & a)
//!  @brief Roll Pitch Yaw rotation.
{
   Matrix rot(4,4);
   Real ca, sa, cb, sb, cc, sc;

   rot << fourbyfourident; // identity matrix

   ca = cos(a(1));
   sa = sin(a(1));
   cb = cos(a(2));
   sb = sin(a(2));
   cc = cos(a(3));
   sc = sin(a(3));

   rot(1,1) = cb*cc;
   rot(1,2) = sa*sb*cc-ca*sc;
   rot(1,3) = ca*sb*cc+sa*sc;
   rot(2,1) = cb*sc;
   rot(2,2) = sa*sb*sc+ca*cc;
   rot(2,3) = ca*sb*sc-sa*cc;
   rot(3,1) = -sb;
   rot(3,2) = sa*cb;
   rot(3,3) = ca*cb;

   rot.Release(); return rot;
}


ReturnMatrix eulzxz(const ColumnVector & a)
//!  @brief Euler ZXZ rotation
{
   Matrix rot(4,4);
   Real c1, s1, ca, sa, c2, s2;

   rot << fourbyfourident; // identity matrix

   c1 = cos(a(1));
   s1 = sin(a(1));
   ca = cos(a(2));
   sa = sin(a(2));
   c2 = cos(a(3));
   s2 = sin(a(3));

   rot(1,1) = c1*c2-s1*ca*s2;
   rot(1,2) = -c1*s2-s1*ca*c2;
   rot(1,3) = sa*s1;
   rot(2,1) = s1*c2+c1*ca*s2;
   rot(2,2) = -s1*s2+c1*ca*c2;
   rot(2,3) = -sa*c1;
   rot(3,1) = sa*s2;
   rot(3,2) = sa*c2;
   rot(3,3) = ca;

   rot.Release(); return rot;
}


ReturnMatrix rotd(const Real theta, const ColumnVector & k1,
                  const ColumnVector & k2)
//!  @brief Rotation around an arbitrary line.
{
   Matrix rot;

   rot = trans(k1)*rotk(theta,k2-k1)*trans(-k1);

   rot.Release(); return rot;
}

// inverse problem for compound rotations

ReturnMatrix irotk(const Matrix & R)
//!  @brief Obtain axis from a rotation matrix.
{
   ColumnVector k(4);
   Real a, b, c;

   a = (R(3,2)-R(2,3));
   b = (R(1,3)-R(3,1));
   c = (R(2,1)-R(1,2));
   k(4) = atan2(sqrt(a*a + b*b + c*c),(R(1,1) + R(2,2) + R(3,3)-1));
   k(1) = (R(3,2)-R(2,3))/(2*sin(k(4)));
   k(2) = (R(1,3)-R(3,1))/(2*sin(k(4)));
   k(3) = (R(2,1)-R(1,2))/(2*sin(k(4)));

   k.Release(); return k;
}


ReturnMatrix irpy(const Matrix & R)
  //!  @brief Obtain Roll, Pitch and Yaw from a rotation matrix.
{
   ColumnVector k(3);

   if (R(3,1)==1) {
      k(1) = atan2(-R(1,2),-R(1,3));
      k(2) = -M_PI/2;
      k(3) = 0.0;
   } else if (R(3,1)==-1) {
      k(1) = atan2(R(1,2),R(1,3));
      k(2) = M_PI/2;
      k(3) = 0.0;
   } else {
      k(1) = atan2(R(3,2), R(3,3));
      k(2) = atan2(-R(3,1), sqrt(R(1,1)*R(1,1) + R(2,1)*R(2,1)));
      k(3) = atan2(R(2,1), R(1,1));
   }

   k.Release(); return k;
}


ReturnMatrix ieulzxz(const Matrix & R)
  //!  @brief Obtain Roll, Pitch and Yaw from a rotation matrix.
{
   ColumnVector  a(3);

   if ((R(3,3)==1)  || (R(3,3)==-1)) {
      a(1) = 0.0;
      a(2) = ((R(3,3) == 1) ? 0.0 : M_PI);
      a(3) = atan2(R(2,1),R(1,1));
   } else {
      a(1) = atan2(R(1,3), -R(2,3));
      a(2) = atan2(sqrt(R(1,3)*R(1,3) + R(2,3)*R(2,3)), R(3,3));
      a(3) = atan2(R(3,1), R(3,2));
   }

   a.Release(); return a;
}

#ifdef use_namespace
}
#endif
